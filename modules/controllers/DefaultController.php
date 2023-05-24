<?php

namespace app\modules\controllers;

use app\modules\models\admin;
use app\modules\models\LoginFormAdmin;
use Yii;
use yii\web\Controller;
use yii\web\Response;

/**
 * Default controller for the `Admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionLogin() {
//        $a = new Admin();
//        $a->role = 1;
//        $a->email = "admin";
//        $a->username = "admin";
//        $a->password_hash = "admin";
//        $a->save();
        if (!Yii::$app->admin->isGuest) {
            return $this->redirect('/admin/index');
        }

        $model = new LoginFormAdmin();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/admin/index');
        }

        return $this->render('login', [
            'model' => $model
        ]);
    }


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->admin->logout();

        return $this->redirect('/admin');
    }
}
