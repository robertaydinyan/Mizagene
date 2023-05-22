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

$this->title = 'Drafts';
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
            'title_russian',
            'title_english',
            'description_russian',
            'description_english',
            [
                'header' => '<div>Adult</div>',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->adult ? 'yes' : 'no';
                }
            ],
            [
                'header' => '<div>Regions</div>',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->getRegions();
                }
            ],
            [
                'header' => '<div>items</div>',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->getItemsCount();
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
