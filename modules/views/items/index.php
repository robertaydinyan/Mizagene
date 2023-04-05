<?php

use app\modules\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\models\ItemsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var yii\data\ActiveDataProvider $dataProviderMigration */

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
            'id',
            'item_id',
            [
                'label' => 'Title Russian',
                'value' => function($model) {
                    return $model->getTitle(1);
                }
            ],
            [
                'label' => 'Title English',
                'value' => function($model) {
                    return $model->getTitle(2);
                }
            ],
            'stage',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Items $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <h1><?= Html::encode($this->title . ' (migrated)') ?></h1>
    <?= GridView::widget([
        'dataProvider' => $dataProviderMigration,
//        'filterModel' => $searchModel,
        'columns' => [
            [
                'header' => 'actions',
                'class' => ActionColumn::className(),
                'template' => '{view} {update} {translate} {delete}',
                'buttons' => [
                    'translate' => function ($url, $model, $key) {
                        return Html::a('<i class="fa fa-language send-to-translator"></i>', '#', [
                            'title' => 'Send to translator',
                            'data-pjax' => '1',
                        ]);
                    }
                ],
                'urlCreator' => function ($action, Items $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
            'item_id',
            [
                'label' => 'Title Persian',
                'value' => function($model) {
                    return $model->getTitle(3)->title;
                }
            ],
            [
                'label' => 'Title Russian',
                'value' => function($model) {
                    return $model->getTitle(1)->title;
                }
            ],
            [
                'label' => 'Title English',
                'value' => function($model) {
                    return $model->getTitle(2)->title;
                }
            ],
            [
                'label' => 'Title Temp Russian',
                'value' => function($model) {
                    return $model->getTitle(1)->title_temp;
                }
            ],
            [
                'label' => 'Title Temp English',
                'value' => function($model) {
                    return $model->getTitle(2)->title_temp;
                }
            ],
            [
                'label' => 'i_result_sector1_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector1_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector1_colorid);
                }
            ],

            [
                'label' => 'i_result_sector1_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector1_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector1_colorid);
                }
            ],

            [
                'label' => 'i_result_sector2_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector2_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector2_colorid);
                }
            ],

            [
                'label' => 'i_result_sector3_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector3_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector3_colorid);
                }
            ],

            [
                'label' => 'i_result_sector4_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector4_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector4_colorid);
                }
            ],

            [
                'label' => 'i_result_sector5_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector5_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector5_colorid);
                }
            ],

            [
                'label' => 'i_result_sector6_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector6_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector6_colorid);
                }
            ],

            [
                'label' => 'i_result_sector7_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector7_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector7_colorid);
                }
            ],

            [
                'label' => 'i_result_sector8_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector8_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector8_colorid);
                }
            ],

            [
                'label' => 'i_result_sector9_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector9_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector9_colorid);
                }
            ],

            [
                'label' => 'i_result_sector10_colorid',
                'format' => 'html',
                'value' => function($model) {
                    return $model->i_result_sector10_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector10_colorid);
                }
            ],
        ],
    ]); ?>
</div>
