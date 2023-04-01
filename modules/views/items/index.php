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
</div>
