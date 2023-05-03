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

        if ($model->load($post,'') && $model->login()) {

            return $this->goBack();
        }

        $model->password = '';
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionSignup(){
        $model = new SignupForm();

        $post = Yii::$app->request->post();
        if (isset($post['is_company'])) {
            $model = new SignupcompanyForm();
        }

        if ($model->load($post, '') && $model->validate() && $model->signup()){

            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
                return $this->redirect(['/add-subject']);
            } else {
                return $this->render('index');
            }

            return $this->redirect(Yii::$app->homeUrl);
        }

        return $this->render('index', ['model' => $model]);
    }

//    public function actionSignupcompany(){
//        $model = new SignupcompanyForm();
//
//        if ($model->load(Yii::$app->request->post()) && $model->signupcompany()){
//            return $this->redirect(Yii::$app->homeUrl);
//        }
//
//        return $this->render(view: 'signupcompany', params: ['model' => $model]);
//    }

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

}
