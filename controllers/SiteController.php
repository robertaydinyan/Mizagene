<?php

namespace app\controllers;

use app\models\SignupForm;
use app\models\User;
use app\models\SignupcompanyForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use Facebook\Facebook;


class SiteController extends Controller
{
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

    public function actionSignupFacebook()
    {
        $fb = new Facebook([
            'app_id' => '1905373833188880',
            'app_secret' => 'c9b641f7e20f41e7b695cacd08235169',
            'default_graph_version' => 'v13.0',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        $permissions = ['email'];

        $loginUrl = $helper->getLoginUrl('https://youmee.tech/site/callback', $permissions);

        return $this->redirect($loginUrl);
    }

    public function actionCallback()
    {
        // Replace APP_ID and APP_SECRET with your Facebook app credentials
        $fb = new Facebook([
            'app_id' => '1905373833188880',
            'app_secret' => 'c9b641f7e20f41e7b695cacd08235169',
            'default_graph_version' => 'v13.0',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            // Handle Facebook API errors
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            // Handle SDK errors
        }

        if (!isset($accessToken)) {
            // Redirect to login page or display an error message
        }

        // Get user profile data
        $response = $fb->get('/me?fields=id,name,email', $accessToken);
        $userProfile = $response->getGraphUser();
var_dump($userProfile);die;
        // Process the user data and create a new user account or perform any other necessary actions
        // You can access the user's Facebook ID, name, and email using $userProfile->getId(), $userProfile->getName(), $userProfile->getEmail() respectively

        // Redirect the user to a success page or perform any other desired action
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
