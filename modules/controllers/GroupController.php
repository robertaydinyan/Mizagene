<?php

namespace app\modules\controllers;

use app\modules\models\Group;
use app\modules\models\GroupSearch;
use app\modules\models\GroupVariants;
use app\modules\models\Items;
use app\modules\models\Region;
use app\modules\models\UsgType;
use Yii;
use yii\helpers\ArrayHelper;
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
        $item = Items::findOne(1);
        $item->rangeCalculation(array(29, -5), array(53, 15));
        die();
        $searchModel = new GroupSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
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
                    $model->datetime = date('Y-m-d H:i:s');
                    $model->save();
                    $variant = new GroupVariants();
                    $variant->group_id = $model->id;
                    $variant->depth = 1;
                    $variant->name = 'Vol 1';
                    $variant->items = $model->items;
                    $variant->item_description_ru = Yii::$app->request->post('Group')['item_description_ru'];
                    $variant->item_description_en = Yii::$app->request->post('Group')['item_description_en'];
                    $variant->save();
                }
                $iconFile = UploadedFile::getInstance($model, 'icon');
                if ($iconFile) {
                    $iconContent = file_get_contents($iconFile->tempName);
                    var_dump($iconContent);die();
                    $model->icon = $iconContent;
                }
                if ($model->save()) {
                    $step = min(2, $step + 1);

                    return $this->redirect(['create?step=' . ($step) . '&id=' . $model->id]);
                }
            }
        }
        $regions = \yii\helpers\ArrayHelper::map(Region::find()->asArray()->all(), 'id', 'name');

        $items = Items::find()->all();
        return $this->render('create', [
            'model' => $model,
            'items' => $items,
            'regions' => $regions,
            'step' => $step
        ]);
    }

    public function actionGetActiveGroups($search) {
        $variants = GroupVariants::find()
//            ->select([
//                'group_variants.id',
//                'adult',
//                'title_english',
//                'name',
//                'group_variants.items',
//                'JSON_LENGTH(JSON_EXTRACT(group_variants.items, \'$\')) as el_count',
//                'IFNULL((SELECT max(depth) from group_variants as gv WHERE gv.parent_id = group_variants.id), 0) as variants_count',
//                '(
//                  SELECT COUNT(*)
//                  FROM items
//                  WHERE check1 = 1
//                    AND JSON_CONTAINS(REPLACE(group_variants.items, \'"\', \'\'), CAST(id AS JSON), \'$\')
//                ) AS active_items',
//                '(
//                  SELECT COUNT(*)
//                  FROM items
//                  WHERE check1 = 0
//                    AND JSON_CONTAINS(REPLACE(group_variants.items, \'"\', \'\'), CAST(id AS JSON), \'$\')
//                ) AS disable_items',
//            ])
            ->joinWith(['group' => function($model) use ($search){
                $search_model = new GroupSearch();
                $search_model->filterByText($model, $search);
                $model->andFilterWhere(['pushed' => 1]);
            }], false);

//        echo "<pre>";
//        var_dump($variants->asArray()->all());
//        die();
        $result = [];
        foreach ($variants->all() as $variant) {
            $result[$variant->id] = $this->renderAjax('../reports/_variant', [
                'variant' => $variant,
                'template' => true
            ]);
        }

        return json_encode($result);
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

                    $variant = GroupVariants::find()->where(['group_id' => $id, 'depth' => 1])->one();
                    $variant->items = $model->items;
                    $variant->item_description_ru = Yii::$app->request->post('Group')['item_description_ru'];
                    $variant->item_description_en = Yii::$app->request->post('Group')['item_description_en'];
                    $variant->save();
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

    public function actionCreateVariant($id, $variant_id = null) {
        $model = $this->findModel($id);
        $variant = $variant_id ? GroupVariants::findOne($variant_id) : null;
        $usg_types = ArrayHelper::map(UsgType::find()->asArray()->all(), 'id', 'name');
        $comb_types = Items::getICombTypes();

        if ($this->request->isPost) {
            $model = new GroupVariants();
            $data = Yii::$app->request->post('Group');
            $model->items = $data['items'];
            $model->item_description_ru = $data['item_description_ru'];
            $model->item_description_en = $data['item_description_en'];
            $model->group_id = $id;
            if ($variant_id) {
                $original_name = GroupVariants::findOne($variant_id)->name;
            } else {
                $original_name = 'Vol 1';
            }
            $model->depth = (GroupVariants::find()->select('max(depth) as depth')->where(['group_id' => $id, 'parent_id' => $variant_id])->one()['depth'] ?: 0) + 1;
            $model->parent_id = $variant_id;
            $model->name = $original_name . '.' . $model->depth;
            $model->save();
            return $this->redirect('/admin/group/index');
        }

        return $this->render('create-variant', [
            'model' => $model,
            'usg_types' => $usg_types,
            'comb_types' => $comb_types,
            'variant' => $variant
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
