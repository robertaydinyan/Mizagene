<?php

namespace app\modules\controllers;

use app\modules\models\Group;
use app\modules\models\GroupSearch;
use app\modules\models\Items;
use app\modules\models\Region;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GroupController implements the CRUD actions for Group model.
 */
class GroupController extends Controller
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
     * Lists all Group models.
     *
     * @return string
     */ 
    

    public function actionIndex() {
        $searchModel = new GroupSearch();
        $dataProvider = $searchModel->search($this->request->queryParams, 0);

        return $this->render('drafts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Displays a single Group model.
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
     * Creates a new Group model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $step = $this->request->get('step') ?: 1;
        if ($step == 1) {
            $model = new Group();
        } else {
            $model = $this->findModel($this->request->get('id'));
        }
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                if ($this->request->post('push') !== null) {
                    $model->pushed = 1;
                    $model->save();
                }
                $iconFile = UploadedFile::getInstance($model, 'icon');
                if ($iconFile) {
                    $iconContent = file_get_contents($iconFile->tempName);
                    $model->icon = $iconContent;
                }
                if ($model->save()) {
                    $step = min(2, $step + 1);

                    return $this->redirect(['create?step=' . ($step) . '&id=' . $model->id]);
                }
            }
        }
        $regions = Region::find()->asArray()->all();
        $regions = \yii\helpers\ArrayHelper::map($regions, 'id', 'name');

        $items = Items::find()->all();
        return $this->render('create', [
            'model' => $model,
            'items' => $items,
            'regions' => $regions,
            'step' => $step
        ]);
    }

    /**
     * Updates an existing Group model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $step = 2;

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                if ($this->request->post('push') !== null) {
                    $model->pushed = 1;
                    $model->save();
                }
                $iconFile = UploadedFile::getInstance($model, 'icon');
                if ($iconFile) {
                    $iconContent = file_get_contents($iconFile->tempName);
                    $model->icon = $iconContent;
                }
                if ($model->save()) {
                    $step = min(2, $step + 1);

                    return $this->redirect(['create?step=' . ($step) . '&id=' . $model->id]);
                }
            }
        }
        $regions = Region::find()->asArray()->all();
        $regions = \yii\helpers\ArrayHelper::map($regions, 'id', 'name');

        $items = Items::find()->all();
        return $this->render('update', [
            'model' => $model,
            'items' => $items,
            'regions' => $regions,
            'step' => $step
        ]);
    }

    /**
     * Deletes an existing Group model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionDrafts() {
        $searchModel = new GroupSearch();
        $dataProvider = $searchModel->search($this->request->queryParams, 0);

        return $this->render('drafts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Finds the Group model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Group the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Group::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
