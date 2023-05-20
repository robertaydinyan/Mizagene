<?php

use app\modules\models\Region;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\models\RegionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Regions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="region-index">

    <h4><?= Html::encode($this->title) ?></h4>

    <p>
        <?= Html::a('Create Region', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'tableOptions' => ['class' => 'table table-striped table-bordered simple-grid'],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
            [
                'header' => '<div>Countries</div>',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->getCountries();
                }
            ],
            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete}',
                'urlCreator' => function ($action, Region $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'buttons' => [
                    'delete' => function ($url, $model, $key) {
                        return Html::a('',
                            $url,
                            [
                                'class' => 'icon archive archive-red label',
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
