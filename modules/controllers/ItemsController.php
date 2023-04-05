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
    public function actionIndex()
    {
        $searchModel = new ItemsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $dataProviderMigration = $searchModel->search($this->request->queryParams, 1);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProviderMigration' => $dataProviderMigration,
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
            if (Items::saveData($this->request->post(), $model)) {
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

        if ($this->request->isPost && Items::saveData($this->request->post(), $model)) {
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
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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

    public function actionAccept() {
        $itemID = Yii::$app->request->post('itemID');
        $item = Items::findOne($itemID);
        $item->{"check" . Yii::$app->admin->getIdentity()->role} = 2;
        $item->save();
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
