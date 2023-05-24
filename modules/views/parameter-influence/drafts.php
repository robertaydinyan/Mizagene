<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\models\GroupSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Drafts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-index">
    <?= Yii::$app->controller->renderPartial('_menu.php'); ?>

    <?= GridView::widget([
        'tableOptions' => ['class' => 'table table-striped table-bordered simple-grid'],
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            [
                'header' => '<div>type</div>',
                'format' => 'raw',
                'value' => function($model) {
                    return \app\modules\models\Items::getITypes()[$model->type];
                }
            ],
            [
                'header' => '<div>type</div>',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->item->getTitle(1)->title;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete}',
                'buttons' => [
                    'delete' => function ($url, $model, $key) {
                        return Html::a('',
                            $url,
                            [
                                'class' => 'icon delete label',
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
