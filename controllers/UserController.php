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


class UserController extends Controller
{
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

    public function actionUser()
    {
        return $this->render('user');
    }



}