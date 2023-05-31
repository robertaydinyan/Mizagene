<?php

use yii\bootstrap5\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Subject;

?>
<?= GridView::widget([
    'tableOptions' => ['class' => 'table table-striped table-bordered simple-grid'],
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'header' => '<div>id</div>',
            'format' => 'raw',
            'value' => function($model) {
                return sprintf('
                        <span>%s</span><br>
                        <img class="icon" src="/images/icons/youmee_small_gr.png">
                    ',
                    $model->id
                );
            }
        ],
        [
            'header' => '<div>Image</div>',
            'format' => 'raw',
            'value' => function($model) {
                $lastDotPosition = strrpos($model->image, '.');
                $dotImage = substr($model->image, 0, $lastDotPosition) . '0.jpg';
                $dotImage = '/landmarks' . DS . str_replace('/var/www/youmee/web/images/subjects/', '', $dotImage);
                return sprintf('
                        <div class="d-flex">
                            <img src="%s" class="subject-image">
                            <img src="%s" class="subject-image">
                        </div>
                    ',
                    str_replace('/var/www/youmee/web', '', $model->image),
                    $dotImage
                );
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