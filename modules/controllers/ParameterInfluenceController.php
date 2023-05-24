<?php

namespace app\modules\controllers;

use app\modules\models\Items;
use app\modules\models\ParameterInfluence;
use app\modules\models\ParameterInfluenceItem;
use app\modules\models\ParameterInfluenceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\View;

use Yii;
/**
 * ParameterInfluenceController implements the CRUD actions for ParameterInfluence model.
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
     * Lists all ParameterInfluence models.
     *
     * @return string
     */
    public function actionIndex() {
        $searchModel = new ParameterInfluenceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams, 1);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionDrafts() {
        $searchModel = new ParameterInfluenceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams, 0);

        return $this->render('drafts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Displays a single ParameterInfluence model.
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
     * Creates a new ParameterInfluence model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate() {
        $step = $this->request->get('step') ?: 1;
        if ($step == 1) {
            $model = new ParameterInfluence();
        } else {
            $model = $this->findModel($this->request->get('id'));
        }

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
//                $items = Yii::$app->request->post('item');
//                $weights = Yii::$app->request->post('weight');
                $items = Yii::$app->request->post('Item');
                foreach ($items['item_id'] as $i => $item_id) {
                    $item = ParameterInfluenceItem::find()->where(['item_id' => $item_id])->one();
                    $item = $item ?: new ParameterInfluenceItem();
                    $item->influence_id = $model->id;
                    $item->item_id = $item_id;
                    $item->weight = $items['weight'][$i];
                    $item->lower_value = $items[$item_id]['lower'];
                    $item->upper_value = $items[$item_id]['upper'];
                    $item->coefficient = $items[$item_id]['coefficient'];
                    $item->save(false);
                }

                if ($this->request->post('push') !== null) {
                    $model->pushed = 1;
                    $model->save();
                    return $this->redirect(['index']);
                }
                $step = min(3, $step + 1);
                return $this->redirect(['create?step=' . ($step) . '&id=' . $model->id]);
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
            'comb_types' => $comb_types,
            'step' => $step
        ]);
    }

    /**
     * Updates an existing ParameterInfluence model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $step = $this->request->get('step') ?: 3;
        if ($step == 1) {
            $model = new ParameterInfluence();
        } else {
            $model = $this->findModel($this->request->get('id'));
        }

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $items = Yii::$app->request->post('Item');
                foreach ($items['item_id'] as $i => $item_id) {
                    $item = ParameterInfluenceItem::find()->where(['item_id' => $item_id])->one();
                    $item = $item ?: new ParameterInfluenceItem();
                    $item->influence_id = $model->id;
                    $item->item_id = $item_id;
                    $item->weight = $items['weight'][$i];
                    $item->lower_value = isset($items[$item_id]) ? $items[$item_id]['lower'] : null;
                    $item->upper_value = isset($items[$item_id]) ? $items[$item_id]['upper'] : null;
                    $item->coefficient = isset($items[$item_id]) ? $items[$item_id]['coefficient'] : null;
                    $item->save(false);
                }
                if ($this->request->post('push') !== null) {
                    $model->pushed = 1;
                    $model->save();
                    return $this->redirect(['index']);
                }
                $step = min(3, $step + 1);
                return $this->redirect(['create?step=' . ($step) . '&id=' . $model->id]);
            }
        }
        $influenceItems = \yii\helpers\ArrayHelper::map(Items::find()->select(['items.id as id', 'item_title.title as title'])
            ->joinWith([
                'itemTitles' => function ($query) {
                    $query->where(['languageID' => 1]);
                },
            ], false)->where(['influence' => 1])->asArray()->all(), 'id', 'title');
        $usg_types = Items::getIUsgTypes();
        $comb_types = Items::getICombTypes();

        return $this->render('update', [
            'model' => $model,
            'influenceItems' => $influenceItems,
            'usg_types' => $usg_types,
            'comb_types' => $comb_types,
            'step' => $step
        ]);
    }

    /**
     * Deletes an existing ParameterInfluence model.
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
        $types = ParameterInfluence::find()->select('id, name');
        in_array(1, $type) && $types->orFilterWhere(['single' => 1]);
        in_array(2, $type) && $types->orFilterWhere(['multiple' => 1]);
        $types = \yii\helpers\ArrayHelper::map($types->asArray()->all(), 'id', 'name');
        return json_encode($types);
    }

    /**
     * Finds the ParameterInfluence model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return ParameterInfluence the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ParameterInfluence::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
