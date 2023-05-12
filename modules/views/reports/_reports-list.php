<?php

use yii\helpers\Html;
use yii\grid\ActionColumn;
use yii\grid\GridView;
?>

<?= GridView::widget([
    'tableOptions' => ['class' => 'table table-striped table-bordered simple-grid sortable-grid'],
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'title_russian',
        'title_english',
        'description_russian',
        'description_english',
        'datetime',
        [
            'header' => '<div>Count</div>',
            'format' => 'raw',
            'value' => function($model) {
                return '<span style="width: 100%; display: inline-block;"">' . $model->getGroupsCount() . '</span><br>' .
                    implode("", array_map(function ($elem) {
                        return "<span>" . $elem . "</span><br>";
                    }, $model->getGroupsNames()));
            }
        ],
        'comment',
        [
            'class' => ActionColumn::className(),
            'template' => '{disable} {update} {delete}',
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
                },
                'disable' => function($url, $model, $key) {
                    return sprintf('
                        <label class="switch">
                            <input type="checkbox" %s>
                            <span class="slider round active-report-disable"></span>
                        </label><br>',

                        !$model->disabled ? "checked" : ""
                    );
                },
            ]
        ],
    ],
]); ?>