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
use app\modules\models\GroupVariants;
use app\modules\models\Items;


class UserController extends Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest && $action->id != 'subject' && $action->id != 'change-lang' && $action->id != 'allitems')  {
            $this->redirect(['/']);
        }else {
            if ($action->id == 'delete-subject' || $action->id == 'update-subject-info' || $action->id == 'add-connection' || $action->id == 'delete-connection' || $action->id == 'agree' || $action->id == 'disagree' || $action->id == 'filter-subjects' || $action->id == 'filter-analytics-subjects' || $action->id == 'put-mark' || $action->id == 'set-range' || $action->id == 'restore-range' || $action->id == 'youmee-result') {
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
        $command = 'cd /var/www/youmee/python/landmarks/ && /usr/bin/python3 index.py ' . $image . ' 2>&1';
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
        $output = file_get_contents(\Yii::getAlias('@webroot') . DS . '..' . DS . 'python' . DS . 'landmarks' . DS . 'json' . DS . str_replace('/var/www/youmee/web/images/subjects/', '',$string) . '.json');
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


        $numbers = $mz->getNumbers($subject->id);
        $numbers = json_decode($numbers);
        $decodedResult = json_decode($result);

        if ($tresult) {
            $tresult->subject_id = $subject->id;
            $tresult->result = $result;
            $tresult->balgham = round($numbers->balgham, 1);
            $tresult->soda = round($numbers->soda, 1);
            $tresult->safra = round($numbers->safra, 1);
            $tresult->dam = round($numbers->dam, 1);
            $tresult->mizagene_id = $decodedResult[0]->subject_ID;
            $tresult->save();
        } else {
            $mod = new Tresult();
            $mod->subject_id = $subject->id;
            $mod->result = $result;
            $mod->balgham = round($numbers->balgham, 1);
            $mod->soda = round($numbers->soda, 1);
            $mod->safra = round($numbers->safra, 1);
            $mod->dam = round($numbers->dam, 1);
            $mod->mizagene_id = $decodedResult[0]->subject_ID;
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
        $data = Subject::find()->where(['status' => 0])->andWhere(['user_id' => Yii::$app->user->identity->id])->all();

        return $this->render('connections', [
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
                    if ($sbs->height == $subject->height && $sbs->wrist_size == $subject->wrist_size && $sbs->gender == $subject->gender && $sbs->year_of_birth == $subject->year_of_birth) {
                        $check = 0;
                        break;
                    }
                }
                if ($check == 1) {
                    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                    $rand_str = substr(str_shuffle($chars), 0, 25);
                    $res = Tresult::find()->where(['subject_id' => $subject->id])->one();
                    $clonedModel = new Subject();
                    $clonedModel->attributes = $subject->attributes;
                    $clonedModel->id = null;
                    $clonedModel->user_id = Yii::$app->user->identity->id;
                    $clonedModel->public_id = $rand_str;
                    $clonedModel->is_me = 0;
                    $clonedModel->status = 0;
                    $clonedModel->copied = 1;
                    $clonedModel->save();

                    $cloneResult = new Tresult();
                    $cloneResult->id = null;
                    $cloneResult->subject_id = $clonedModel->id;
                    $cloneResult->result = $res->result;
                    $cloneResult->balgham = $res->balgham;
                    $cloneResult->soda = $res->soda;
                    $cloneResult->safra = $res->safra;
                    $cloneResult->dam = $res->dam;
                    $cloneResult->mizagene_id = $res->mizagene_id;
                    $cloneResult->save();
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

    public function actionFilterSubjects()
    {
        $scheme = [
            0 => '#000',
            1 => '#EB4228',
            2 => '#F3B86B',
            3 => '#F3E5B2',
            4 => '#808080',
            5 => '#D1D690',
            6 => '#A0AD63'
        ];

        $post = Yii::$app->request->post();
        $data = [];

        if ($post['param'] != '') {
            if (!isset($_GET['type'])) {
                $subjects = Yii::$app->user->identity->allsubjects;
            } elseif (isset($_GET['type']) && $_GET['type'] == 'cloned') {
                $subjects = Yii::$app->user->identity->clonedsubjects;
            } elseif (isset($_GET['type']) && $_GET['type'] == 'deleted') {
                $subjects = Yii::$app->user->identity->deletedsubjects;
            } else {
                $subjects = Yii::$app->user->identity->mysubjects;
            }

            $item = Items::findOne($post['param']);

            foreach ($subjects as $subject) {
                $result = $subject->result;
                $result = json_decode($result['result']);

                $subject_item_result = array_map(function($obj) use($item) {
                    if ($obj->item_ID == $item->item_id) {
                        return $obj->subject_item_result;
                    }
                }, $result);

                $subject_item_result = array_filter($subject_item_result);
                $subject_item_result = array_values($subject_item_result);
                $subject_item_result  = $subject_item_result ? $subject_item_result[0] : 0;
                $youmeeResult = 0;
                if ($item->min_r != null) {
                    $youmeeResult = floor(($subject_item_result + ($item->min_delta_r + ($subject_item_result - $item->min_r ) * ($item->coefficient))));
                }

                $colors = [];

                for ($i = 1; $i <= 10; $i++) {
                    $colors[] = [''.$i/10 => $scheme[$item->getColorSector($i)->color_id] ];
                }
                $color = null;

                foreach ($colors as $element) {
                    if (array_key_exists(''.(floor(($youmeeResult == 0 ? $subject_item_result : $youmeeResult)/10)/10).'', $element)) {
                        $color = $element[''.(floor(($youmeeResult == 0 ? $subject_item_result : $youmeeResult)/10)/10).''];
                        break;
                    }
                }

                if (isset($post['color']) && $post['color'] != '') {
                    if ($post['color'] == $color) {
                        $data[] = [
                            'image' => str_replace('/var/www/youmee/web/', '', $subject->image),
                            'name' => $subject->name,
                            'result' => [
                                'clr' => $color,
                                'nmb' => floor($youmeeResult == 0 ? $subject_item_result : $youmeeResult),
                            ]
                        ];
                    }
                }else if (isset($post['min']) && $post['min'] != '' && isset($post['max']) && $post['max'] != '') {
                    if (($subject_item_result ? floor($subject_item_result[0]) : 0) >= $post['min'] && ($subject_item_result ? floor($subject_item_result[0]) : 0) <= $post['max']) {
                        $data[] = [
                            'image' => str_replace('/var/www/youmee/web/', '', $subject->image),
                            'name' => $subject->name,
                            'result' => [
                                'clr' => $color,
                                'nmb' => floor($youmeeResult == 0 ? $subject_item_result : $youmeeResult),
                            ]
                        ];
                    }

                } else {
                    $data[] = [
                        'image' => str_replace('/var/www/youmee/web/', '', $subject->image),
                        'name' => $subject->name,
                        'result' => [
                            'clr' => $color,
                            'nmb' => floor($youmeeResult == 0 ? $subject_item_result : $youmeeResult),
                        ]
                    ];
                }

            }
        }

        return json_encode($data);
    }

    public function actionFilterAnalyticsSubjects()
    {

        $scheme = [
            0 => '#000',
            1 => '#EB4228',
            2 => '#F3B86B',
            3 => '#F3E5B2',
            4 => '#808080',
            5 => '#D1D690',
            6 => '#A0AD63'
        ];

        $post = Yii::$app->request->post();
        $data = [];
        $restore = 'set';

        if ($post['param'] != '') {
            $subjects = Subject::find()->select('id, user_id, image, name, public_id')->where(['deleted_at' => null])->andWhere(['status' => 0])->andWhere(['copied' => 0]);
            if (isset($post['gender']) && $post['gender'] != '') {
                if ($post['gender'] == 3) {
                    $subjects = $subjects->andWhere(['between', 'gender', '3', '4']);
                } else {
                    $subjects = $subjects->andWhere(['gender' => $post['gender']]);
                }
            }

            $subjects = $subjects->all();

            $item = Items::findOne($post['param']);
            $restore = $item->min_r != null ? 'restore' : 'set';

            foreach ($subjects as $subject) {
                $result = $subject->result;
                $result = json_decode($result['result']);

                $subject_item_result = array_map(function($obj) use($item) {
                    if ($obj->item_ID == $item->item_id) {
                        return $obj->subject_item_result;
                    }
                }, $result);

                $subject_item_result = array_filter($subject_item_result);
                $subject_item_result = array_values($subject_item_result);

                $colors = [];

                for ($i = 1; $i <= 10; $i++) {
                    $colors[] = [''.$i/10 => $scheme[$item->getColorSector($i)->color_id] ];
                }
                $color = null;

                foreach ($colors as $element) {
                    if (array_key_exists(''.(floor(($subject_item_result ? $subject_item_result[0] : 0)/10)/10).'', $element)) {
                        $color = $element[''.(floor(($subject_item_result ? $subject_item_result[0] : 0)/10)/10).''];
                        break;
                    }
                }

                $data[] = [
                    'id' => $subject->id,
                    'item_id' => $item->id,
                    'image' => [
                        'img' => str_replace('/var/www/youmee/web/', '', $subject->image),
                        'publicID' => $subject->public_id
                    ],
                    'name' => $subject->name,
                    'result' => [
                        'clr' => $color,
                        'nmb' => $subject_item_result ? round($subject_item_result[0], 2) : 0,
                        'status' => $item->min_r != null ? 'd-none' : ''
                    ]
                ];
            }
        }

        return json_encode(['data' => $data, 'restore' => $restore]);
    }

    public function actionYoumeeResult()
    {

        $scheme = [
            0 => '#000',
            1 => '#EB4228',
            2 => '#F3B86B',
            3 => '#F3E5B2',
            4 => '#808080',
            5 => '#D1D690',
            6 => '#A0AD63'
        ];

        $post = Yii::$app->request->post();
        $data = [];
        $restore = 'set';

        if ($post['param'] != '') {
            $subjects = Subject::find()->select('id, user_id, image, name, public_id')->where(['deleted_at' => null])->andWhere(['status' => 0])->andWhere(['copied' => 0]);
            if (isset($post['gender']) && $post['gender'] != '') {
                if ($post['gender'] == 3) {
                    $subjects = $subjects->andWhere(['between', 'gender', '3', '4']);
                } else {
                    $subjects = $subjects->andWhere(['gender' => $post['gender']]);
                }
            }

            $subjects = $subjects->all();

            $item = Items::findOne($post['param']);
            $restore = $item->min_r != null ? 'restore' : 'set';

            foreach ($subjects as $subject) {
                $result = $subject->result;
                $result = json_decode($result['result']);

                $subject_item_result = array_map(function($obj) use($item) {
                    if ($obj->item_ID == $item->item_id) {
                        return $obj->subject_item_result;
                    }
                }, $result);

                $subject_item_result = array_filter($subject_item_result);
                $subject_item_result = array_values($subject_item_result);
                $subject_item_result  = $subject_item_result ? $subject_item_result[0] : 0;
                $youmeeResult = 0;
                if ($item->min_r != null) {
                    $youmeeResult = floor(($subject_item_result + ($item->min_delta_r + ($subject_item_result - $item->min_r ) * ($item->coefficient))));
                    $youmee = round(($subject_item_result + ($item->min_delta_r + ($subject_item_result - $item->min_r ) * ($item->coefficient))), 2);
                }

                $colors = [];

                for ($i = 1; $i <= 10; $i++) {
                    $colors[] = [''.$i/10 => $scheme[$item->getColorSector($i)->color_id] ];
                }
                $color = null;

                foreach ($colors as $element) {
                    if (array_key_exists(''.(floor(($youmeeResult == 0 ? $subject_item_result : $youmeeResult)/10)/10).'', $element)) {
                        $color = $element[''.(floor(($youmeeResult == 0 ? $subject_item_result : $youmeeResult)/10)/10).''];
                        break;
                    }
                }

//                $subject_item_result = $subject_item_result ? round($subject_item_result[0], 2) : 0;

                $data[] = [
                    'id' => $subject->id,
                    'item_id' => $item->id,
                    'image' => [
                        'img' => str_replace('/var/www/youmee/web/', '', $subject->image),
                        'publicID' => $subject->public_id
                    ],
                    'name' => $subject->name,
                    'result' => [
                        'clr' => $color,
                        'nmb' => $youmee,
//                        'nmb' => round(($subject_item_result + ($item->min_delta_r + ($subject_item_result - $item->min_r ) * ($item->coefficient))), 2),
                        'status' => $item->min_r != null ? 'd-none' : ''
                    ]
                ];
            }
        }

        return json_encode(['data' => $data, 'restore' => $restore]);
    }

    public function actionAnalytics()
    {
        return $this->render('analytics');
    }

    public function actionAnalyticsTable($gender = 'null')
    {
        $subjects = Subject::find()->where(['status' => 0])->andWhere(['copied' => 0])->andWhere(['deleted_at' => null]);
        if ($gender != 'null') {
            if ($gender == 3) {
                $subjects = $subjects->andWhere(['between', 'gender', '3', '4']);
            } else {
                $subjects = $subjects->andWhere(['gender' => $gender]);
            }
        }
        $subjects = $subjects->all();
        $reports = Reports::find()->where(['disabled' => 0])->all();
        $itemIDs = [];
        $data = [];

        foreach ($reports as $rep) {
            foreach ($rep->groups as $gr) {
                $group = GroupVariants::findOne($gr);
                foreach ($group->items as $it) {
                    $item = Items::findOne($it);
                    if (!in_array($item->id, $itemIDs)) {
                        $itemIDs[] = $item->id;
                    }
                }
            }
        }

        foreach ($itemIDs as $it) {
            $item = Items::findOne($it);
            $subRes = [];
            $numbers = [];
            $changedNumbers = [];
            foreach ($subjects as $subject) {
                $result = $subject->result;
                $result = json_decode($result['result']);

                $subject_item_result = array_map(function($obj) use($item) {
                    if ($obj->item_ID == $item->item_id) {
                        return $obj->subject_item_result;
                    }
                }, $result);

                $subject_item_result = array_filter($subject_item_result);
                $subject_item_result = array_values($subject_item_result);
                if (floor($subject_item_result ? $subject_item_result[0] : 0 /10) != 0) {
                    $numbers[] = floor($subject_item_result ? $subject_item_result[0] : 0 /10);
                    if ($item->min_r != null) {
                        $sub_result = $subject_item_result ? round($subject_item_result[0], 2) : 0;
                        $changedNumbers[] = round(($sub_result + ($item->min_delta_r + ($sub_result - $item->min_r ) * ($item->coefficient))), 2);
                    }
                }
            }

            $min = min(count($numbers) > 0 ? $numbers : [0]);
            $max = max(count($numbers) > 0 ? $numbers : [0]);
            $changedMin = min(count($changedNumbers) > 0 ? $changedNumbers : [0]);
            $changedMax = max(count($changedNumbers) > 0 ? $changedNumbers : [0]);

            $data[] = [
                'id' => $item->id,
                'item_title_ru' => $item->getTitle(1)->title,
                'item_desc_ru' => $item->getTitle(1)->description,
                'item_title_fa' => $item->getTitle(3)->title,
                'item_desc_fa' => $item->getTitle(3)->description,
                'min_result' => $min,
                'max_result' => $max,
                'max_min' => $changedMax != 0 ? $max - $min . ' (' . $changedMax - $changedMin . ')' : $max - $min,
                'min_dead_zone' => '0 - ' . ($min - 1),
                'max_dead_zone' => ($max + 1) . ' - 100',
                'total_dead_zone' => 100 - ($max - $min),
                'cat' => 'cat-' . $item->mark . '.png',
                'catCode' => $item->mark,
                'flash' => $item->min_r != null ? '' : 'd-none',
                'activated_at' => $item->activated_at ?? ''
            ];
        }
        return json_encode($data);
    }

    public function actionPutMark() {
        $id = Yii::$app->request->post('id');
        if ($id) {
            $model = Items::findOne($id);
            $model->mark = Yii::$app->request->post('mark');
            $model->save();
            return Yii::$app->request->post('mark');
        }
    }

    public function actionSetRange()
    {
        $post = Yii::$app->request->post();
        $item = Items::findOne($post['item']);
        $max = [$post['subjects'][0], $post['numbers'][0]];
        $min = [$post['subjects'][1], $post['numbers'][1]];
        $item->rangeCalculation($min, $max);

        return 200;
    }

    public function actionRestoreRange()
    {
        $post = Yii::$app->request->post();
        $item = Items::findOne($post['item']);
        $item->min_r = null;
        $item->min_delta_r = null;
        $item->coefficient = null;
        $item->save();

        return 200;
    }

    public function actionSetNumbers()
    {
        $subjects = Subject::find()->where(['deleted_at' => null])->andWhere(['copied' => 0])->all();
        foreach ($subjects as $subject) {
            $tresult = Tresult::find()->where(['subject_id' => $subject->id])->one();
            if ($tresult && $tresult->soda == null) {
                $mz = new Mizagene();
                $numbers = $mz->getNumbers($subject->id);
                $numbers = json_decode($numbers);
                $tresult->balgham = round($numbers->balgham, 1);
                $tresult->soda = round($numbers->soda, 1);
                $tresult->safra = round($numbers->safra, 1);
                $tresult->dam = round($numbers->dam, 1);
                $result = $subject->result;
                $result = json_decode($result['result']);
                $tresult->mizagene_id = $result[0]->subject_ID;
                $tresult->save();
            }
        }

        echo 200;
    }

}
