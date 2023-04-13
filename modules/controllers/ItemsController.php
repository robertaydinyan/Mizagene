<?php

namespace app\modules\controllers;

use app\modules\models\Items;
use app\modules\models\ItemsSearch;
use app\modules\models\ItemTitle;
use app\modules\models\Language;
use Yii;
use yii\rbac\Item;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItemsController implements the CRUD actions for Items model.
 */
class ItemsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Items models.
     *
     * @return string
     */
    public function actionIndex() {
        $steps = Items::getSteps();
        $step = Yii::$app->request->get('step');
        $pill = Yii::$app->request->get('pill') ?: 1;
        $step = isset($steps[$step]) ? $step : min(array_keys($steps));
        $searchModel = new ItemsSearch();
        $params = $this->request->queryParams;
        $params['pill'] = $pill;
        $params['step'] = $step;
        $dataProvider = $searchModel->search($params);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pill' => $pill,
            'step' => $step,
            'tabs' => Items::getTabs(),
            'steps' => Items::getSteps(),
        ]);
    }

    /**
     * Displays a single Items model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $languages = Language::find()->all();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'languages' => $languages
        ]);
    }

    /**
     * Creates a new Items model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Items();

        if ($this->request->isPost) {
            if ($model->saveData($this->request->post())) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        $languages = Language::find()->all();
        return $this->render('create', [
            'model' => $model,
            'languages' => $languages
        ]);
    }

    /**
     * Updates an existing Items model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->saveData($this->request->post())) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        $languages = Language::find()->all();
        return $this->render('update', [
            'model' => $model,
            'languages' => $languages
        ]);
    }

    /**
     * Deletes an existing Items model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $item = $this->findModel($id);
        if (in_array(Yii::$app->admin->getIdentity()->role, [1, 3])) {
            $item->deleted = 1;
        }
        $item->save();
        return $this->redirect(Yii::$app->request->referrer);
    }
    /**
     * Restores an existing Items model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionRestore($id)
    {
        $item = $this->findModel($id);
        $item->deleted = 0;
        $item->save();
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionFixtranslation() {
        $itemID = Yii::$app->request->post('itemID');
        $item = Items::findOne($itemID);
        if (in_array(Yii::$app->admin->getIdentity()->role, [1, 3])) {
            $item->check4 = 1;
        }

        $item->save();
    }

    public function actionFixcolors() {
        $itemID = Yii::$app->request->post('itemID');
        $item = Items::findOne($itemID);
        if (in_array(Yii::$app->admin->getIdentity()->role, [1, 3])) {
            $item->check2 = 1;
        }

        $item->save();
    }

    public function actionPush() {
        if (Yii::$app->admin->getIdentity()->role == 1) {
            $itemID = Yii::$app->request->get('itemID');
            $item = Items::findOne($itemID);
            $item->check1 = 1;
            $item->save();
        }

        return $this->redirect('/admin/items/index');
    }

    public function actionChecktranslator() {
        $role = Yii::$app->admin->getIdentity()->role;
        if (in_array($role, [1, 4])) {
            $itemID = Yii::$app->request->post('itemID');
            $item = Items::findOne($itemID);
            $item->check4 += 1;
            $item->save();
        }
    }

    public function actionCheckpsychologist() {
        $role = Yii::$app->admin->getIdentity()->role;
        if (in_array($role, [1, 3])) {
            $itemID = Yii::$app->request->post('itemID');
            $item = Items::findOne($itemID);
            $item->check3 += 1;
            $item->save();
        }
    }
    public function actionCheckprofessor() {
        $role = Yii::$app->admin->getIdentity()->role;
        if (in_array($role, [1, 2])) {
            $itemID = Yii::$app->request->post('itemID');
            $item = Items::findOne($itemID);
            $item->check2 += 1;
            $item->save();
        }
    }
    public function actionAdmin() {
        $role = Yii::$app->admin->getIdentity()->role;
        if ($role == 1) {
            $itemID = Yii::$app->request->post('itemID');
            $item = Items::findOne($itemID);
            $item->check1 += 1;
            $item->save();
        }
    }
    /**
     * Finds the Items model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Items the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Items::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
