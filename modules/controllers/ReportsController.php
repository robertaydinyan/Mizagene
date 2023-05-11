<?php

namespace app\modules\controllers;

use app\modules\models\Group;
use app\modules\models\GroupVariants;
use app\modules\models\Region;
use app\modules\models\Reports;
use app\modules\models\ReportsSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\View;

/**
 * ReportsController implements the CRUD actions for Reports model.
 */
class ReportsController extends Controller
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
        $this->view->registerJsFile('@web/js/report.js', ['position' => View::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);

        return parent::beforeAction($action);
    }

    /**
     * Lists all Reports models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ReportsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionGetReportsList($search) {
        $search = json_decode($search, true);
        $searchModel = new ReportsSearch();
        $dataProvider = $searchModel->search($search);

        return $this->renderAjax('_reports-list', ['dataProvider' => $dataProvider]);
    }

    /**
     * Displays a single Reports model.
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
     * Creates a new Reports model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $step = $this->request->get('step') ?: 1;
        if ($step == 1) {
            $model = new Reports();
        } else {
            $model = $this->findModel($this->request->get('id'));
        }

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

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
        } else {
            $model->loadDefaultValues();
        }
        $regions = \yii\helpers\ArrayHelper::map(Region::find()->asArray()->all(), 'id', 'name');
        $group_variants = GroupVariants::find()->all();
        return $this->render('create', [
            'model' => $model,
            'step' => $step,
            'group_variants' => $group_variants,
            'regions' => $regions
        ]);
    }

    /**
     * Updates an existing Reports model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionChangeOrder() {
        $order = Yii::$app->request->post('order');
        if ($order) {
            foreach ($order as $i => $el) {
                $r = Reports::findOne($el);
                $r->order = $i;
                $r->save(false);
            }
        }
    }

    public function actionDisable() {
        $id = Yii::$app->request->post('id');
        if ($id) {
            $report = Reports::findOne($id);
            $report->disabled = 1 - $report->disabled;
            $report->save();
        }
    }

    /**
     * Deletes an existing Reports model.
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

    /**
     * Finds the Reports model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Reports the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reports::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
