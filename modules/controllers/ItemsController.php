<?php

namespace app\modules\controllers;

use app\modules\models\ItemColors;
use app\modules\models\Items;
use app\modules\models\ItemsSearch;
use app\modules\models\ItemTitle;
use app\modules\models\Language;
use yii\db\Expression;
use yii\web\Response;
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
        $status = Yii::$app->request->get('status') ?: 1;
        $step = isset($steps[$step]) ? $step : min(array_keys($steps));
        $searchModel = new ItemsSearch();
        $dataProvider = $searchModel->search('', $pill, $step, $status);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pill' => $pill,
            'step' => $step,
            'tabs' => Items::getTabs(),
            'steps' => Items::getSteps(),
            'status' => $status
        ]);
    }

    public function actionGetitemslist($search) {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $steps = Items::getSteps();
        $pill = Yii::$app->request->get('pill') ?: 1;
        $step = Yii::$app->request->get('step') ?: 1;
        $status = Yii::$app->request->get('status') ?: 1;
        $step = isset($steps[$step]) ? $step : min(array_keys($steps));
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
//        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = Items::find()->select('id, item_id, i_type');
        $search = json_decode($search);
        if ($search) {
            if (isset($search->usg_types)) {
                is_string($search->usg_types) && $search->usg_types = array($search->usg_types);
                foreach ($search->usg_types as $usg_type) {
                    $type = explode('-', $usg_type);
                    $model->orfilterWhere(['and', [
                        'i_type' => $type[0],
                        'JSON_CONTAINS(i_usg_type, ' . $type[1] . ' , "$")' => 1
                    ]]);
                }
            }
            $language =$search->language;
            $model->with([
                'itemTitles' => function ($query) use ($language) {
                    $query->select('title, itemID');
                    return $query->andFilterWhere(['languageID' => $language]);
                },
            ]);
        }
        $model->andFilterWhere(['check1' => 1]);
        var_dump($model->createCommand()->getRawSql());
        return json_encode($model->asArray()->all());
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

    public function actionUpdate($id)
    {
//        if ($this->request->isPost) {
            $model = $this->findModel($id);
//            echo "<pre>";
//            var_dump(json_decode(Yii::$app->request->get('Items'), true));
//            die();
            return $model->saveData(json_decode(Yii::$app->request->get('Items'), true));
//            $description = Yii::$app->request->post('Items')['description'];
//            if ($description) {
//                foreach (Yii::$app->request->post('Items')['title'] as $j => $t) {
//                    $it = ItemTitle::find()->where(['itemID' => $model->id, 'languageID' => $j])->one() ?: new ItemTitle();
//                    $it->description = $description[$j][$i];
//                    $it->title = $t[$i];
//                    $it->itemID = $model->id;
//                    $it->languageID = $j;
//                    $it->save();
//                }
//            }
//        }
//        return $this->redirect(Yii::$app->request->referrer);
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

    public function actionCheckadmin() {
        if (Yii::$app->admin->getIdentity()->role == 1) {
            $itemID = Yii::$app->request->post('itemID');
            $item = Items::findOne($itemID);
            $item->check1 = 1;
            $item->activated_at = date('Y-m-d h:i:s');
            $item->save();
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
