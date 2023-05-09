<?php

namespace app\controllers;

use app\models\SignupForm;
use app\models\SignupcompanyForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Subject;
use yii\helpers\Url;
use app\models\Mizagene;
use app\models\Tresult;
use app\models\Connection;


class UserController extends Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest)  {
            $this->redirect(['/site/index']);
        }else {
            if ($action->id == 'delete-subject' || $action->id == 'update-subject-info' || $action->id == 'add-connection') {
                $this->enableCsrfValidation = false;
            }

            return parent::beforeAction($action);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'about'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['about'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['about'],
                        'allow' => false,
                        'roles' => ['?'],
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionAddSubject()
    {
        return $this->render('addsubject');
    }

    public function sendToMizagene($image, $subject) {
        $command = 'cd /var/www/html/Mizagene/python/landmarks/ && /usr/bin/python index.py ' . $image . ' 2>&1';
        exec($command);
        $extensions = array(
            'bmp',
            'gif',
            'ico',
            'jpeg',
            'jpg',
            'png',
            'svg',
            'tif',
            'tiff',
            'webp',
            'heic',
            'heif',
        );
        $string = $image;
        foreach ($extensions as $ext) {
            $string = str_replace('.' . $ext, '', $string);
        }
        $output = file_get_contents(\Yii::getAlias('@webroot') . DS . '..' . DS . 'python' . DS . 'landmarks' . DS . 'json' . DS . str_replace('/var/www/html/Mizagene/web/images/subjects/', '',$string) . '.json');
        $output = json_decode($output)->result;
        $output->subject_id = $subject->id;
        $output->subject_photo_id = 1;
        $output->subject_data = [
            "name" => $subject->name ,
            "surname" => $subject->name   ,
            "b_year" => $subject->year_of_birth  ,
            "wrist_size" => $subject->wrist_size  ,
            "height" =>  $subject->height  ,
            "gender" => $subject->gender

        ];

        $mz = new Mizagene();
        $resultID = $mz->addSubject($output);
        $send = '{
                "subject_ID" : ' . $resultID . ' ,
                "subject_i_role" : 0,
                "object_ID" : 0,
                "object_i_role" : 0
            }';
        $result = $mz->getResult(json_decode($send));
        $tresult = Tresult::find()->where(['subject_id' => $subject->id])->one();
        if ($tresult) {
            $tresult->subject_id = $subject->id;
            $tresult->result = $result;
            $tresult->save();
        } else {
            $mod = new Tresult();
            $mod->subject_id = $subject->id;
            $mod->result = $result;
            $mod->save();
        }

        return 200;
    }

    public function actionCreateSubject()
    {
        $post = Yii::$app->request->post();
        $subject = new Subject();
        $post['user_id'] = Yii::$app->user->id;
        $post['image'] = '';
        $post['created_at'] = date('Y-m-d H:i:s', time());
        $post['is_me'] = $post['is_me'] ?? 0;

        if(isset($_FILES['image'])){
            $path = Yii::getAlias('@webroot') . '/images/subjects/';
            $file = $path .time().basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $file)) {
                $post['image'] = $file;
            }
        }

        if ($subject->load($post, '') && $subject->save()) {
            $this->sendToMizagene($post['image'], $subject);

            return $this->redirect(['/all-subjects']);
        }

        return $this->redirect(['/add-subject']);
    }

    public function actionAllSubjects()
    {
        return $this->render('allsubjects');
    }

    public function actionSettings()
    {
        return $this->render('settings');
    }

    public function actionConnections()
    {
        return $this->render('connections');
    }

    public function actionMail()
    {
        $message = Yii::$app->mailer->compose();
        $message->setTo('mikayelkotanjyan@gmail.com')
            ->setFrom('mikayelkotanjyan@gmail.com')
            ->setSubject('Email Subject')
            ->setHtmlBody('Email Body');

// Send the message using the mailer component
        $mailer = Yii::$app->mailer;
        if ($mailer->send($message)) {
            echo 'Email sent successfully';
        } else {
            echo 'Error sending email';
        }
    }

    public function actionSubject($id)
    {
        $subject = Subject::find()->where(['id' => $id])->andWhere(['deleted_at' => null])->one();
        if ($subject) {
            return $this->render('user', ['subject' => $subject]);
        } else {
            return $this->redirect(['/all-subjects']);
        }
    }

    public function actionDeleteSubject()
    {
        $post = Yii::$app->request->post();
        $subject = Subject::findOne($post['subject']);
        $subject->deleted_at = date('Y-m-d H:i:s', time());
        $subject->save();

        return 200;
    }

    public function actionUpdateSubjectInfo()
    {
        $post = Yii::$app->request->post();
        $subject = Subject::findOne($post['subject']);
        $subject->gender = $post['gender'];
        $subject->height = $post['height'];
        $subject->wrist_size = $post['wrist_size'];
        $age = $post['age'];
        $subject->year_of_birth = date('Y', strtotime("-$age years"));
        $subject->save();

        $this->sendToMizagene($subject->image, $subject);

        return 200;
    }

    public function actionAddConnection()
    {
        $post = Yii::$app->request->post();
        $connection = new Connection();
        $connection->subject_id = $post['subject'];
        $connection->object_id = $post['object'];
        $connection->subject_type = $post['subject_type'];
        $connection->object_type = $post['object_type'];
        $connection->save();

        $connectionReverse = new Connection();
        $connectionReverse->subject_id = $post['object'];
        $connectionReverse->object_id = $post['subject'];
        $connectionReverse->subject_type = $post['object_type'];
        $connectionReverse->object_type = $post['subject_type'];
        $connectionReverse->save();

        return 200;
    }



}