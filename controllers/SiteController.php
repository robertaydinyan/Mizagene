<?php

namespace app\controllers;

use app\models\SignupForm;
use app\models\User;
use app\models\SignupcompanyForm;
use http\Env\Request;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use Facebook\Facebook;
use yii\authclient\OAuthToken;
use yii\authclient\clients\Google;
use yii\helpers\Url;
use GuzzleHttp\Client;


class SiteController extends Controller
{
    public function beforeAction($action)
    {
        if ($action->id == 'google-login') {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout','about'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGoogleLogin()
    {
        $authCode = Yii::$app->request->get('code');
//var_dump($authCode);die;
        if ($authCode !== null) {
            $accessToken = $this->exchangeAuthCodeForAccessToken($authCode);
            $idToken = $this->getIdTokenFromAccessToken($accessToken);
            $userInfo = $this->decodeAndVerifyIdToken($idToken);

            // Process the user information
            // ...
var_dump(111);die;
//            return $this->goHome();
        }
    }

    private function exchangeAuthCodeForAccessToken($authCode)
    {
        $client = new Client();
var_dump($authCode);die;
        $response = $client->post('https://oauth2.googleapis.com/token', [
            'form_params' => [
                'code' => $authCode,
                'client_id' => '337924835812-t42uuid33rlj493im60g765f07mp6i16.apps.googleusercontent.com',
                'client_secret' => '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',
                'redirect_uri' => Url::to(['site/google-login'], true),
                'grant_type' => 'authorization_code',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        if (isset($data['access_token'])) {
            return $data['access_token'];
        }

        // Handle error response
        // ...
    }

    private function getIdTokenFromAccessToken($accessToken)
    {
        $client = new Client();

        $response = $client->get('https://www.googleapis.com/oauth2/v3/tokeninfo', [
            'query' => [
                'access_token' => $accessToken,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        if (isset($data['id_token'])) {
            return $data['id_token'];
        }

        // Handle error response
        // ...
    }

    private function decodeAndVerifyIdToken($idToken)
    {
        $client = new Google_Client();
        $payload = $client->verifyIdToken($idToken);

        if ($payload) {
            return $payload;
        }

        // Handle error response
        // ...
    }



    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $post = Yii::$app->request->post();
        $model = new LoginForm();

        if ($model->load($post,'') && $model->login() && $model->validate()) {
            if (count(Yii::$app->user->identity->subjects) > 0)
            {
                if (Yii::$app->user->identity->me) {
                    return $this->redirect(['/subject?id=' . Yii::$app->user->identity->me->public_id . '&rep=3']);
                } else {
                    return $this->redirect(['/all-subjects?type=my']);
                }
            } else {
                return $this->redirect(['/add-subject']);
            }
        }else {
            Yii::$app->session->setFlash('error', 'Invalid login credentials');
        }

        $model->password = '';

        $activeTab = Yii::$app->request->post('activeTab', null);
        return $this->render('index', [
            'login_model' => $model,
            'activeTabLog' => $activeTab,
        ]);
    }

    public function actionSignup(){
        $post = Yii::$app->request->post();
        $post['ip'] = $_SERVER['REMOTE_ADDR'];

        $activeTab = Yii::$app->request->post('activeTab', null);
        if (isset($post['is_company'])) {
            $model = new SignupcompanyForm();
            if ($model->load($post, '') && $model->validate() && $model->signup()){

                $model = new LoginForm();
                if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
                    return $this->redirect(['/add-subject']);
                } else {
                    return $this->render('index');
                }

                return $this->redirect(Yii::$app->homeUrl);
            }
            $fakemodel = new SignupcompanyForm();
            return $this->render('index', [
                'isCompany' => $model,
                'model' => $fakemodel,
                'activeTabSignupCompany' => $activeTab,
                ]);
        }
        else{
            $model = new SignupForm();
            if ($model->load($post, '') && $model->validate() && $model->signup()){

                $model = new LoginForm();
                if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
                    return $this->redirect(['/add-subject']);
                } else {
                    return $this->render('index');
                }

                return $this->redirect(Yii::$app->homeUrl);
            }
            $fakemodel = new SignupForm();
            return $this->render('index', [
                'model' => $model,
                'isCompany'=> $fakemodel,
                'activeTabSignup' => $activeTab,
            ]);
        }
        
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

    public function actionAboutTechnology()
    {
        return $this->render('technology');
    }

    public function actionService()
    {
        return $this->render('service');
    }

    public function actionInvestors()
    {
        return $this->render('investors');
    }

    public function actionPartners()
    {
        return $this->render('partners');
    }

    public function actionKycSolutions()
    {
        return $this->render('kyc');
    }

    public function actionIndividualSolutions()
    {
        return $this->render('individual');
    }

    public function actionPersonalSolutions()
    {
        return $this->render('personal');
    }

    public function actionHrSolutions()
    {
        return $this->render('hr');
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionUserprofiles() {
        $tableData = Userprofiles::find()->all();

        $myParam = Yii::$app->request->get('myParam');
        $userprofiles = new Userprofiles();
        $datasearch = $userprofiles->search($myParam);

        return $this->render('userprofiles', [
            'tableData' => $tableData,
            'datasearch' => $datasearch,
        ]);
    }

//    public function actionAddprofile()
//    {
//        return $this->render('addprofile');
//    }
    public function actionChangeLang($lang) {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => 'lang',
            'value' => $lang,
            'expire' => time() + 360000,
        ]));
        $response = Yii::$app->response;
        $response->redirect(Yii::$app->request->referrer);
        return $response;
    }

    public function actionPrivacy()
    {
        return $this->render('privacy');
    }

    public function actionTerms()
    {
        return $this->render('terms');
    }

}
