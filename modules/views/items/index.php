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
/** @var yii\data\ActiveDataProvider $dataProviderPushed */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;

$columns = [
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
    ]
];

$color_columns = [
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
    ]
];
$columns_migrated = $columns;
if (in_array(Yii::$app->admin->getIdentity()->role, [1, 3])) {
    array_splice($columns_migrated, 1, 0, [[
            'header' => 'status',
            'contentOptions' => ['style' => 'min-width: 128px'],
            'content' => function ($model) {
                return
                    '<label>'.Html::checkbox('checkbox1', $model->check2 == 2, ['disabled' => true]).' proffesor</label>'.
                    '<label>'.Html::checkbox('checkbox2', $model->check3 == 2, ['disabled' => true]).' psychologist</label>'.
                    '<label>'.Html::checkbox('checkbox3', $model->check4 == 2, ['disabled' => true]).' translator</label>' .
                    (($model->check2 == 2 && $model->check3 == 2 && $model->check4 == 2 && Yii::$app->admin->getIdentity()->role == 1) ? HTML::a('Push', ['push?itemID=' . $model->id], ['class' => 'btn btn-primary push-item']) : '');
            }
    ]]);
}
if (Yii::$app->admin->getIdentity()->role != 4) {
    $columns = array_merge($columns, $color_columns);
    $columns_migrated = array_merge($columns_migrated, $color_columns);
}
?>
<div class="items-index">

    <h2><?= Html::encode($this->title . ' pushed') ?></h2>
    <?= GridView::widget([
        'dataProvider' => $dataProviderPushed,
//        'filterModel' => $searchModel,
        'columns' => [
            ...$columns
        ],
    ]); ?>

    <h2><?= Html::encode($this->title . 'created') ?></h2>

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

    <h2><?= Html::encode($this->title . ' (migrated)') ?></h2>
    <?= GridView::widget([
        'dataProvider' => $dataProviderMigration,
//        'filterModel' => $searchModel,
        'columns' => [
            [
                'contentOptions' => ['style' => 'min-width: 140px'],
                'header' => 'actions',
                'class' => ActionColumn::className(),
                'template' => '{view} {update} {delete} {translate} {colors} {checkmark}',
                'buttons' => [
                    'translate' => function ($url, $model, $key) {
                        return (in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) AND $model->check4 != 1) ?
                            Html::a('<i class="fa fa-language send-to-translator"></i>', 'javascript:;', [
                                'title' => 'Send to translator',
                                'data-pjax' => '1',
                            ]) :
                            '';
                    },
                    'checkmark' => function ($url, $model, $key) {
                        return (!in_array(Yii::$app->admin->getIdentity()->role, [1]) AND $model->{'check' . Yii::$app->admin->getIdentity()->role} != 2) ?
                            Html::a(sprintf('<i class="fa fa-check item-accept %s"></i>',
                                Yii::$app->admin->getIdentity()->role != 3 ? 'remove-row' : ''
                            ), 'javascript:;', [
                                'title' => 'accept',
                                'data-pjax' => '1',
                            ]) :
                            '';
                    },
                    'colors' => function ($url, $model, $key) {
                        return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                            Html::a('<i class="fa fa-tint send-to-professor"></i>', 'javascript:;', [
                                'title' => 'Send to professor',
                                'data-pjax' => '1',
                            ]) :
                            '';
                    }
                ],

                'urlCreator' => function ($action, Items $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
            ...$columns_migrated
        ],
    ]); ?>
</div>
