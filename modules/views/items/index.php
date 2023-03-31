<?php

use app\modules\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\models\ItemsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'e2e_item_id',
            'item_id',
            'i_type',
            'i_usg_type',
            //'i_comb_type_id',
            //'e2e_item_ru',
            //'e2e_i_description_ru',
            //'e2e_item_en',
            //'e2e_i_description_en',
            //'e2e_item_ir',
            //'e2e_i_description_ir',
            //'i_result_sector1_colorid',
            //'i_result_sector2_colorid',
            //'i_result_sector3_colorid',
            //'i_result_sector4_colorid',
            //'i_result_sector5_colorid',
            //'i_result_sector6_colorid',
            //'i_result_sector7_colorid',
            //'i_result_sector8_colorid',
            //'i_result_sector9_colorid',
            //'i_result_sector10_colorid',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Items $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
