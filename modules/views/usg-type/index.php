<?php

use app\modules\models\UsgType;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\models\UsgTypeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Usg Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usg-type-index">

    <h4><?= Html::encode($this->title) ?></h4>

    <p>
        <?= Html::a('Create Usg Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'tableOptions' => ['class' => 'table table-striped table-bordered simple-grid'],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
            'single',
            'multiple',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UsgType $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
