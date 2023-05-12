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
use app\models\ItemReview;
use app\modules\models\Reports;


class UserController extends Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest && $action->id != 'subject' && $action->id != 'change-lang' && $action->id != 'allitems')  {
            $this->redirect(['/']);
        }else {
            if ($action->id == 'delete-subject' || $action->id == 'update-subject-info' || $action->id == 'add-connection' || $action->id == 'delete-connection' || $action->id == 'agree' || $action->id == 'disagree') {
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
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $rand_str = substr(str_shuffle($chars), 0, 25);
        $subject = new Subject();
        $post['user_id'] = Yii::$app->user->id;
        $post['image'] = '';
        $post['public_id'] = $rand_str;
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
        $connection = Connection::find()->all();
        $subject = Subject::find()->all();

        $data = Connection::find()->with('subjects')->all();
        return $this->render('connections', [
            'connection' => $connection,
            'subject' => $subject,
            'data' => $data,
        ]);
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

    public function actionSubject($id, $rep)
    {
        $subject = Subject::find()->where(['public_id' => $id])->andWhere(['deleted_at' => null])->one();
        if ($subject) {
            if (!Yii::$app->user->isGuest) {
                $check = 1;
                foreach (Yii::$app->user->identity->subjects as $sbs) {
                    if ($sbs->image == $subject->image && $sbs->created_at == $subject->created_at) {
                        $check = 0;
                        break;
                    }
                }
                if ($check == 1) {
                    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                    $rand_str = substr(str_shuffle($chars), 0, 25);
                    $clonedModel = new Subject();
                    $clonedModel->attributes = $subject->attributes;
                    $clonedModel->id = null;
                    $clonedModel->user_id = Yii::$app->user->identity->id;
                    $clonedModel->public_id = $rand_str;
                    $clonedModel->is_me = 0;
                    $clonedModel->save();
                }
            }
            $reports = Reports::find()->where(['disabled' => 0])->all();
            $rep = Reports::findOne($rep);
            return $this->render('user', ['subject' => $subject, 'reports' => $reports, 'rep' => $rep]);
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
        $age = $post['age'];
        if ($subject->gender == $post['gender'] && $subject->height == $post['height'] && $subject->wrist_size == $post['wrist_size'] && $subject->year_of_birth == date('Y', strtotime("-$age years")))
        {
            return 200;
        }
        $subject->gender = $post['gender'];
        $subject->height = $post['height'];
        $subject->wrist_size = $post['wrist_size'];
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
        $connection->created_at = date('Y-m-d H:i:s', time());
        $connection->save();

        $connectionReverse = new Connection();
        $connectionReverse->subject_id = $post['object'];
        $connectionReverse->object_id = $post['subject'];
        $connectionReverse->subject_type = $post['object_type'];
        $connectionReverse->object_type = $post['subject_type'];
        $connectionReverse->created_at = date('Y-m-d H:i:s', time());
        $connectionReverse->save();

        return 200;
    }

    public function actionDeleteConnection()
    {
        $post = Yii::$app->request->post();
        $con = Connection::findOne($post['con']);
        Connection::deleteAll(['subject_id' => $con->object_id, 'object_id' => $con->subject_id]);
        $con->delete();

        return 200;
    }

    public function actionAllitems($id)
    {
        $subject = Subject::findOne($id);
        return $this->render('allitems', ['subject' => $subject]);
    }

    public function actionAgree()
    {
        $post = Yii::$app->request->post();
        $review = new ItemReview();
        $review->item_id = $post['item'];
        $review->subject_id = $post['subject'];
        $review->agree = 1;
        $review->save();

        return 200;
    }

    public function actionDisagree()
    {
        $post = Yii::$app->request->post();
        $review = new ItemReview();
        $review->item_id = $post['item'];
        $review->subject_id = $post['subject'];
        $review->disagree = 1;
        $review->disagree_value = $post['disagree'];
        $review->save();

        return 200;
    }

    public function actionChangeLang($lang = '2')
    {
        setcookie('subjectLang', $lang, time() + (86400 * 30), '/');

        return $this->redirect(Yii::$app->request->referrer);
    }


}