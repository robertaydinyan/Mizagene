<?php

namespace app\modules\controllers;

use app\modules\models\admin;
use app\modules\models\LoginFormAdmin;
use app\modules\models\Group;
use app\modules\models\Reports;
use app\modules\models\Items;
use app\models\Subject;
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
        $groups = Group::find()->all();
        $reports = Reports::find()->all();
        $disabled_items = Items::find()->where(['>', 'mark', 0])->all();
        $subjects_count = \yii\helpers\ArrayHelper::map(Subject::find()->select('gender, count(id) as count')->groupBy('gender')->asArray()->all(), 'gender', 'count');

        return $this->render('index', [
            'groups' => $groups,
            'reports' => $reports,
            'disabled_items' => $disabled_items,
            'subjects_count' => $subjects_count
        ]);
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
