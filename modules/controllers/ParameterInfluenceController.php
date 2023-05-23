<?php

namespace app\modules\controllers;

use app\modules\models\Items;
use app\modules\models\ParameterInfluence;
use app\modules\models\UsgType;
use app\modules\models\UsgTypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\View;

/**
 * UsgTypeController implements the CRUD actions for UsgType model.
 */
class ParameterInfluenceController extends Controller
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

    public function beforeAction($action) {
        $this->view->registerJsFile('@web/js/influence.js', ['position' => View::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);

        return parent::beforeAction($action);
    }

    /**
     * Lists all UsgType models.
     *
     * @return string
     */
    public function actionIndex() {
        return $this->render('index', [
        ]);
    }

    /**
     * Displays a single UsgType model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new UsgType model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ParameterInfluence();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }
        $influenceItems = \yii\helpers\ArrayHelper::map(Items::find()->select(['items.id as id', 'item_title.title as title'])
            ->joinWith([
                'itemTitles' => function ($query) {
                    $query->where(['languageID' => 1]);
                },
            ], false)->where(['influence' => 1])->asArray()->all(), 'id', 'title');
        $usg_types = Items::getIUsgTypes();
        $comb_types = Items::getICombTypes();

        return $this->render('create', [
            'model' => $model,
            'influenceItems' => $influenceItems,
            'usg_types' => $usg_types,
            'comb_types' => $comb_types
        ]);
    }

    /**
     * Updates an existing UsgType model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['create']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UsgType model.
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

    public function actionGetTypes($type) {
        $type = json_decode($type);
        $types = UsgType::find()->select('id, name');
        in_array(1, $type) && $types->orFilterWhere(['single' => 1]);
        in_array(2, $type) && $types->orFilterWhere(['multiple' => 1]);
        $types = \yii\helpers\ArrayHelper::map($types->asArray()->all(), 'id', 'name');
        return json_encode($types);
    }

    /**
     * Finds the UsgType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return UsgType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UsgType::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
