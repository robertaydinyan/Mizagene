<?php
namespace app\controllers;

use app\models\LoginFormAdmin;

class AdminController extends \yii\web\Controller {
    public function actionLogin() {
        $model = new LoginFormAdmin();
        return $this->render('login', [
            'model' => $model
        ]);
    }
}