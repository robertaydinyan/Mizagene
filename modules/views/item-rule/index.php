<?php

use app\modules\models\ItemRule;
use app\modules\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Item Rules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-rule-index">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= Html::a(' <i class="fa fa-plus"></i> Create Rule', ['create'], ['class' => 'btn btn-dark']) ?>

    <?= GridView::widget([
        'tableOptions' => ['class' => 'table table-striped table-bordered simple-grid'],
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            [
                'header' => '<div>Type</div>',
                'format' => 'raw',
                'value' => function($model) {
                    return Items::getITypes()[$model->type];
                }
            ],
            'sub_min_age',
            'sub_max_age',
            'obj_min_age',
            'obj_max_age',
            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete}',
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
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
