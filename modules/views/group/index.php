<?php

use app\modules\models\Group;
use app\modules\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\models\GroupSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Groups';
$this->params['breadcrumbs'][] = $this->title;
$usg_types = Items::getIUsgTypes();
$comb_types = Items::getICombTypes();
?>
<div class="group-index">
    <?= Yii::$app->controller->renderPartial('_menu.php'); ?>

    <?= GridView::widget([
        'tableOptions' => ['class' => 'table table-striped table-bordered simple-grid'],
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            [
                'header' => '<div class="title-label">
                    <img class="flag-icon" src="/images/icons/flag1.jpg" alt="Russian">
                    <div class="title-label-content">
                        <span>Title</span>
                        <span>Description</span>
                    </div>
                </div>',
                'format' => 'raw',
                'value' => function($model) {
                    return sprintf('<div class="title-value">
                        <span>%s</span>
                        <span>%s</span>
                    </div>',

                        $model->title_russian,
                        $model->description_russian
                    );
                }
            ],
            [
                'header' => '<div class="title-label">
                    <img class="flag-icon" src="/images/icons/flag2.png" alt="English">
                    <div class="title-label-content">
                        <span>Title</span>
                        <span>Description</span>
                    </div>
                </div>',
                'format' => 'raw',
                'value' => function($model) {
                    return sprintf('<div class="title-value">
                        <span>%s</span>
                        <span>%s</span>
                    </div>',

                        $model->title_english,
                        $model->description_english
                    );
                }
            ],
            'datetime',
            [
                'header' => '<div>Reports</div>',
                'format' => 'raw',
                'value' => function($model) {
                    $vols = "";
                    foreach ($model->vols as $vol) {
                        $vols .= sprintf(
                            '<span>%s</span><br>',
                            implode("",
                                array_map(function ($report) {
                                    return "<span>" . $report['title_russian'] . " </span>";
                                }, $vol->getReportsName())
                            )
                        );
                    }
                    return $vols;
                    return '<span>ddddddd</span> <br> <span>ddddddd</span>';
//                    return implode("", array_map(function ($elem) {
//                        return "<span>" . $elem . "</span><br>";
//                    }, $model->getReportsName()));
                }
            ],
            [
                'header' => '<div>Variants</div>',
                'format' => 'raw',
                'value' => function($model) {
                    $vols = "";
                    foreach ($model->vols as $vol) {
                        $vols .= sprintf('<a href="/admin/group/create-variant?id=%s&variant_id=%s">%s</a><br>', $model->id, $vol->id, $vol->name);
                    }
                    return $vols;
                }
            ],
            [
                'header' => '<div>items</div>',
                'format' => 'raw',
                'value' => function($model) {
                    $vols = "";
                    foreach ($model->vols as $vol) {
                        $vols .= sprintf('
                            <div class="custom-accordion">
                                <div class="custom-accordion-item">
                                    <div class="custom-accordion-header d-flex justify-content-between">
                                        <div>
                                            <span>%s(<span style="color: green">%s</span>, <span style="color: red">%s</span>)</span>
                                        </div>
                                        <div>
                                            <a href="javascript:;"><i class="fa fa-caret-down"></i></a>
                                        </div>
                                    </div>
                                    <div class="custom-accordion-collapse custom-collapse">%s</div>
                                </div>
                            </div>
                            ',
                            
                            $vol->getItemsCount(),
                            $vol->getItemsCount(1),
                            $vol->getItemsCount(0),
                            implode("",
                                array_map(function ($item) {
                                    return "<span>" . $item->id . " " . $item->getTitle(1)->title . "</span><br>";
                                }, $vol->getItems())
                            )
                        );
                    }
                    return $vols;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'header' => Html::a('', 'javascript:;',
                    [
                        'class' => 'icon save-white label',
                    ]
                ),
                'template' => '{update} {delete}',
                'buttons' => [
                    'delete' => function ($url, $model, $key) {
                        return Html::a('',
                            $url,
                            [
                                'class' => 'icon remove label',
                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                'data-method' => 'post',
                            ]
                        );
                    },
                    'update' => function($url, $model, $key) {
                        return Html::a('',
                            $url,
                            ['class' => 'icon update label']
                        );
                    }
                ]
            ],
        ],
    ]); ?>
</div>
