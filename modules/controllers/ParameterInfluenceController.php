<?php

namespace app\modules\controllers;

use app\models\Subject;
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
                if (isset($items['item_id'])) {
                    foreach ($items['item_id'] as $i => $item_id) {
                        $item = ParameterInfluenceItem::find()->where(['item_id' => $item_id])->one();
                        $item = $item ?: new ParameterInfluenceItem();
                        $item->influence_id = $model->id;
                        $item->item_id = $item_id;
                        $item->weight = isset($items['weight']) ? $items['weight'][$i] : null;
                        $item->lower_value = isset($items[$item_id]) ? $items[$item_id]['lower'] : [''];
                        $item->upper_value = isset($items[$item_id]) ? $items[$item_id]['upper'] : [''];
                        $item->coefficient = isset($items[$item_id]) ? $items[$item_id]['coefficient'] : [''];
                        $item->save(false);
                    }
                }
                if ($this->request->post('push') !== null) {
                    $model->pushed = 1;
                    $model->save();
                    return $this->redirect(['index']);
                }
                $step = min(2, $step + 1);
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
        $subjects = Subject::find()->select('id, user_id, image, name, public_id')->where(['deleted_at' => null])->andWhere(['status' => 0])->andWhere(['copied' => 0])->all();
        return $this->render('create', [
            'model' => $model,
            'influenceItems' => $influenceItems,
            'usg_types' => $usg_types,
            'comb_types' => $comb_types,
            'step' => $step,
            'subjects' => $subjects
        ]);
    }

    // ToDo:: remove this from here
    public function actionGetSubjectResult() {
        $subjects = json_decode(Yii::$app->request->get('subjects'));
        $items = json_decode(Yii::$app->request->get('items'));
        $result = array();
        if ($items && $subjects) {
            foreach ($subjects as $subject_id) {
                $subject = Subject::findOne($subject_id);
                $subject_result = json_decode($subject->result->result);
                $result[$subject_id]['name'] = $subject->name;
                $result[$subject_id]['items'] = array_reduce(array_filter($subject_result, function($el) use ($items) {
                    return in_array($el->item_ID, $items);
                }), function($carry, $el) {
                    $carry[$el->item_ID] = $el->subject_item_result;
                    return $carry;
                }, []);
//                    (array_map(function($obj) use($items) {
//                    if (in_array($obj->item_ID, $items)) {
//                        return $obj->subject_item_result;
//                    }
//                }, $subject_result));
            }
        }
        return json_encode($result);
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
                if (isset($items['item_id'])) {
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
