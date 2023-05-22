<?php

namespace app\modules\controllers;

use app\models\Mizagene;
use app\modules\models\ItemColors;
use app\modules\models\Items;
use app\modules\models\ItemsSearch;
use app\modules\models\Language;
use app\modules\models\UsgType;
use yii\base\InvalidConfigException;
use yii\web\BadRequestHttpException;
use yii\web\JqueryAsset;
use yii\web\Response;
use Yii;
use yii\rbac\Item;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\View;

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
     * @throws InvalidConfigException
     */
    public function beforeAction($action) {
        $this->view->registerJsFile('@web/js/items.js', ['position' => View::POS_END, 'depends' => [JqueryAsset::class]]);

        return parent::beforeAction($action);
    }

    /**
     * Lists all Items models.
     *
     * @return string
     */
    public function actionIndex() {
        $step = Yii::$app->request->get('step');
        $pill = Yii::$app->request->get('pill') ?: 1;
        $steps = Items::getSteps($pill);
        $status = Yii::$app->request->get('status') ?: 1;
        $step = (isset($steps[$step])) ? $step : ($steps ? min(array_keys($steps)) : 1);
        $searchModel = new ItemsSearch();
        $dataProvider = $searchModel->search('', $pill, $step, $status);
        $usgTypes = UsgType::find()->all();

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'pill' => $pill,
            'step' => $step,
            'steps' => $steps,
            'status' => $status,
            'usgTypes' => $usgTypes
        ]);
    }

    public function actionGetItemsList($search) {
//        Yii::$app->response->format = Response::FORMAT_JSON;
        $search = json_decode($search);
        $pill = Yii::$app->request->get('pill') ?: 1;
        $step = Yii::$app->request->get('step') ?: 1;
        $steps = Items::getSteps($pill);
        $status = Yii::$app->request->get('status') ?: 1;
        $step = (isset($steps[$step])) ? $step : ($steps ? min(array_keys($steps)) : 1);
        $searchModel = new ItemsSearch();
        $dataProvider = $searchModel->search($search, $pill, $step, $status);

        return $this->renderAjax('_items-list', [
            'source' => 'controller',
            'dataProvider' => $dataProvider,
            'pill' => $pill,
            'step' => $step,
            'status' => $status
        ]);
    }

    public function actionGetActiveItems($search) {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = Items::find()->select('items.id, item_id, i_type, source, check1, disabled');
        $search = json_decode($search);
        $search_model = new ItemsSearch();
        $search_model->filterByText($model, $search->search, false);
        isset($search->usg_type) && $search_model->filterByUsgTypes($model, $search->usg_type);

        $model->andFilterWhere(['deleted' => 0]);
        $model->groupBy(['items.id']);
        if ($search) {
            if (isset($search->usg_comb_types)) {
                $usg_comb_types = "";
                is_string($search->usg_comb_types) && $search->usg_comb_types = array($search->usg_comb_types);
                foreach ($search->usg_comb_types as $i => $usg_comb_type) {
                    $usg_comb_types .= 'JSON_CONTAINS(i_comb_type_id, \'"' . $usg_comb_type . '"\', \'$\') or ';
                }
                $usg_comb_types = substr($usg_comb_types, 0, -3);

                $model->andWhere($usg_comb_types);
            }
            if (isset($search->type)) {
                $type_sql = "";
                is_string($search->type) && $search->type = array($search->type);
                foreach ($search->type as $i => $type) {
                    $type_sql .= 'JSON_CONTAINS(i_type, \'"' . $type . '"\', \'$\') and ';
                }
                $type_sql = substr($type_sql, 0, -4);
                $model->andWhere($type_sql);
            }
            $language = $search->language;
            $model->with([
                'russian' => function ($query) use ($language) {
                    $query->select('title, description, itemID');
                },
                'english' => function ($query) use ($language) {
                    $query->select('title, description, itemID');
                },
            ]);
        }
        $model->limit(9999);
        // var_dump($model->createCommand()->getRawSql());die();
        return json_encode($model->asArray()->all());
    }

    public function actionGetItem($id) {
        return json_encode(Items::getDataById($id, 1));
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
            $items = Yii::$app->request->post('Items');
            $model->source = 0;
            $model->saveData($items);
            return $this->redirect('/admin/items/index?pill=2');
        }

        $languages = Language::find()->all();
        return $this->render('create', [
            'model' => $model,
            'languages' => $languages
        ]);
    }

    public function actionUpdate($id) {
        $model = $this->findModel($id);
        if ($this->request->isPost) {
            $items = Yii::$app->request->post('Items');
            if (!is_array($items)) {
                $items = json_decode($items, true)['Items'];
                $model->saveData($items);
            } else {
                $model->saveData($items);
                return $this->redirect(Yii::$app->request->referrer);
            }
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }

    public function actionPutMark() {
        $id = Yii::$app->request->post('id');
        if ($id) {
            $model = $this->findModel($id);
            $model->mark = 1 - $model->mark;
            return $model->save();
        }
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
            $item->deleted += 1;
            $item->delete_date = date('Y-m-d H:i:s');
        }
        return $item->save();
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
        return $item->save();
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

    public function actionCheckAdmin($influence, $type) {
        if (Yii::$app->admin->getIdentity()->role == 1) {
            $itemID = Yii::$app->request->post('itemID');
            $item_q = Items::find()->where(['items.id' => $itemID]);

            if ($influence == 1) {
                $item = $item_q->one();
                $item->influence = 1;
                return $item->save();
            }

            if ($type == 1) {
                $item_n = Items::getDataById($itemID, 3);
                $mz = new Mizagene();
                $result = $mz->setItem($item_n);
            }
            if ($result) {
                $item = $item_q->one();
                $item->check1 = 1;
                $item->activated_at = date('Y-m-d h:i:s');
                return $item->save();
            }
        }
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

    public function actionDeclinepsychologist() {
        $role = Yii::$app->admin->getIdentity()->role;
        if (in_array($role, [1, 3])) {
            $itemID = Yii::$app->request->post('itemID');
            $item = Items::findOne($itemID);
            $item->check4 -= 1;
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

    public function actionChangeDescStatus($id) {
        $ic = ItemColors::findOne($id);
        $ic->status = Yii::$app->request->post('status');
        $ic->comment = Yii::$app->request->post('comment');
        return $ic->save();
    }

    public function actionDeclineProfessor() {
        $item = Items::findOne(Yii::$app->request->post('itemID'));
        if ($item->getStep() == 5) {
            $item->check2 -= 1;
        } else {
            $item->returned = 1;
            $item->check2 = 2;
            $item->check3 = 1;
            $item->check4 = 2;
        }
        $item->save();
    }

    public function actionDisable() {
        $id = Yii::$app->request->post('id');
        if ($id) {
            $item = Items::findOne($id);
            $item->disabled = 1 - $item->disabled;
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