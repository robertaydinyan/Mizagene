<?php

use app\modules\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\models\ItemsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var integer $pill */
/** @var integer $step */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;

$columns = [
    'item_id' => 'item_id',
    'title_persian' => [
        'label' => 'Title Persian',
        'value' => function($model) {
            return $model->getTitle(3)->title;
        }
    ],
    'title_russian' => [
        'label' => 'Title Russian',
        'value' => function($model) {
            return $model->getTitle(1)->title;
        }
    ],
    'title_english' => [
        'label' => 'Title English',
        'value' => function($model) {
            return $model->getTitle(2)->title;
        }
    ],
    'title_temp_russian' => [
        'label' => 'Title Temp Russian',
        'value' => function($model) {
            return $model->getTitle(1)->title_temp;
        }
    ],
    'title_temp_english' => [
        'label' => 'Title Temp English',
        'value' => function($model) {
            return $model->getTitle(2)->title_temp;
        }
    ],
    'color1' => [
        'label' => 'i_result_sector1_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector1_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector1_colorid);
        }
    ],
    'color2' => [
        'label' => 'i_result_sector2_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector2_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector2_colorid);
        }
    ],
    'color3' => [
        'label' => 'i_result_sector3_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector3_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector3_colorid);
        }
    ],
    'color4' => [
        'label' => 'i_result_sector4_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector4_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector4_colorid);
        }
    ],
    'color5' => [
        'label' => 'i_result_sector5_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector5_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector5_colorid);
        }
    ],
    'color6' => [
        'label' => 'i_result_sector6_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector6_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector6_colorid);
        }
    ],
    'color7' => [
        'label' => 'i_result_sector7_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector7_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector7_colorid);
        }
    ],
    'color8' => [
        'label' => 'i_result_sector8_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector8_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector8_colorid);
        }
    ],
    'color9' => [
        'label' => 'i_result_sector9_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector9_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector9_colorid);
        }
    ],
    'color10' => [
        'label' => 'i_result_sector10_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector10_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector10_colorid);
        }
    ]
];
$columns_filtered = array();
$cl = Items::attributeLabelsCustom($pill, $step);
foreach ($cl[0] as $column) {
    $columns_filtered[] = $columns[$column];
}
?>
<div class="items-index">
    <ul class="nav nav-pills mb-3" role="tablist">
        <?php if ($tabs) {
            foreach ($tabs as $i => $title) {
                echo sprintf('
                    <li class="nav-item" role="presentation">
                        <a class="nav-link %s" data-mdb-toggle="pill" href="?pill=%s" role="tab" aria-selected="true">%s</a>
                    </li>',
                    $pill == $i ? "active" : "",
                    $i,
                    $title
                );
            }
        }?>
    </ul>
    <ul class="nav nav-pills mb-3" role="tablist">
        <?php if ($steps) {
            foreach ($steps as $i => $title) {
                echo sprintf('
                    <li class="nav-item" role="presentation">
                        <a class="nav-link %s" data-mdb-toggle="pill" href="?pill=%s&step=%s" role="tab" aria-selected="true">%s</a>
                    </li>',
                    $step == $i ? "active" : "",
                    $pill,
                    $i,
                    $title
                );
            }
        }?>
    </ul>

    <h2><?= Html::encode($this->title) ?></h2>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            [
                'contentOptions' => ['style' => 'min-width: 140px'],
                'header' => 'actions',
                'class' => ActionColumn::className(),
//                'template' => '{view} {update} {delete} {translate} {colors} {checkmark} {restore}',
                'template' => $cl[1],
                'buttons' => [
                    'translate' => function ($url, $model, $key) {
                        return (in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) AND $model->check4 != 1) ?
                            Html::a('<i class="fa fa-language send-to-translator"></i>', 'javascript:;', [
                                'title' => 'Send to translator',
                                'data-pjax' => '1',
                            ]) :
                            '';
                    },
                    'checkmark' => function ($url, $model, $key) use ($step) {
                        return Html::a(sprintf('<i class="fa fa-check item-accept %s"></i>',
                            Yii::$app->admin->getIdentity()->role != 3 ? 'remove-row' : ''
                        ), 'javascript:;', [
                            'title' => 'accept',
                            'data-pjax' => '1',
                        ]);
                    },
                    'colors' => function ($url, $model, $key) {
                        return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                            Html::a('<i class="fa fa-tint send-to-professor"></i>', 'javascript:;', [
                                'title' => 'Send to professor',
                                'data-pjax' => '1',
                            ]) :
                            '';
                    },
                    'restore' => function ($url, $model, $key) {
                        return Html::a('<i class="fa fa-refresh"></i>', $url, [
                            'title' => 'Restore',
                            'data-pjax' => '1',
                        ]);
                    }
                ],

                'urlCreator' => function ($action, Items $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
            ...$columns_filtered
        ],
    ]); ?>
</div>
