<?php

use app\modules\models\Admin;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Subject;

/** @var yii\web\View $this */
/** @var app\modules\models\AdminSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-index">

    <h4><?= Html::encode($this->title) ?></h4>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'tableOptions' => ['class' => 'table table-striped table-bordered simple-grid'],
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            [
                'header' => '<div>Image</div>',
                'format' => 'raw',
                'value' => function($model) {
                    return sprintf('<img src="%s" width="100">', str_replace('/var/www/youmee/web', '', $model->image));
                }
            ],
            'name',
            'year_of_birth',
            [
                'header' => '<div>Gender</div>',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->getGender();
                }
            ],
            'height',
            'wrist_size',
            'created_at',
            [
                'class' => ActionColumn::className(),
                'template' => '{details}',
                'urlCreator' => function ($action, Subject $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'buttons' => [
                    'details' => function ($url, Subject $model, $key) {
                        return Html::a('',
                            $url,
                            [
                                'class' => 'icon push-black label',
                            ]
                        );
                    }
                ]
            ],
        ],
    ]); ?>


</div>
