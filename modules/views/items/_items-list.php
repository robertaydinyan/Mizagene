<?php
use app\modules\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$columns = [
    '' => [
        'label' => '',
        'format' => 'html',
        'value' => function($model) {
            return '';
        }
    ],
    'item_id' => [
        'header' => '<div><span>ID</span></div>',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return '<span style="display: block; width: 100%; text-align: right">' . $model->item_id . '</span>';
        }
    ],
    'persian' => [
        'header' => '<div class="title-label">
            <img class="flag-icon" src="/images/icons/flag3.jpg" alt="Persian">
            <div class="title-label-content">
                <span>Title</span>
                <span>Description</span>
            </div>
        </div>',
        'format' => 'raw',
        'value' => function($model) {
            return sprintf('<div class="title-value">
                <span style="text-align: right;">%s</span>
                <span style="text-align: right;">%s</span>
            </div>',

                $model->getTitle(3)->title,
                $model->getTitle(3)->description
            );
        }
    ],
    'russian_temp' => [
        'header' => '<div class="title-label title-label-disabled">
            <img class="flag-icon" src="/images/icons/google.png" alt="Google">
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

                $model->getTitle(1)->title_temp,
                $model->getTitle(1)->description_temp
            );
        }
    ],
    'english_temp' => [
        'header' => '<div class="title-label title-label-disabled">
            <img class="flag-icon" src="/images/icons/google.png" alt="Google">
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

                $model->getTitle(2)->title_temp,
                $model->getTitle(2)->description_temp
            );
        }
    ],
    'comment' => [
        'header' => '<div><span>Comment</span></div>',
        'headerOptions' => ['class' => 'join-right'],
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return $form->field($model, 'comment')->textarea()->label(false);
        }
    ],
    'usg_type' => [
        'header' => '<div><span>Parameter usage type</span></div>',
        'headerOptions' => ['class' => 'join-right join-left'],
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return $form->field($model, 'i_usg_type')->dropDownList(Items::getIUsgTypes(), [
                'template' => '{input}',
            ])->label(false);
        }
    ],
    'priority' => [
        'header' => '<div><span>Priority</span></div>',
        'headerOptions' => ['class' => 'join-left join-right'],
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return $form->field($model, 'priority')->dropDownList(Items::getPriorities())->label(false);
        }
    ],
    'russian' => [
        'label' => 'Title Russian',
        'value' => function($model) {
            return $model->getTitle(1)->title;
        }
    ],
    'title_russian' => [
        'label' => 'Title Russian',
        'value' => function($model) {
            return $model->getTitle(1)->title;
        }
    ],
    'title_russian_editable' => [
        'label' => 'Title Russian',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return $form->field($model, 'title[1][]')->textarea([
                'maxlength' => true,
                'value' => $model->getTitle(1)->title,
            ])->label(false);
        }
    ],
    'description_russian' => [
        'label' => 'Description Russian',
        'value' => function($model) {
            return $model->getTitle(1)->description;
        }
    ],
    'description_russian_editable' => [
        'label' => 'Description Russian',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return $form->field($model, 'description[1][]')->textarea([
                'maxlength' => true,
                'value' => $model->getTitle(1)->description,
            ])->label(false);
        }
    ],

//    'title_temp_russian' => [
//        'label' => 'Title Temp Russian',
//        'value' => function($model) {
//            return $model->getTitle(1)->title_temp;
//        }
//    ],
//    'description_temp_russian' => [
//        'label' => 'Description Temp Russian',
//        'value' => function($model) {
//            return $model->getTitle(1)->description_temp;
//        }
//    ],
    'title_english' => [
        'label' => 'Title English',
        'value' => function($model) {
            return $model->getTitle(2)->title;
        }
    ],
    'title_english_editable' => [
        'label' => 'Title English',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return $form->field($model, 'title[2][]')->textarea([
                'maxlength' => true,
                'value' => $model->getTitle(2)->title,
            ])->label(false);
        }
    ],
    'description_english' => [
        'label' => 'Description English',
        'value' => function($model) {
            return $model->getTitle(2)->description;
        }
    ],
    'description_english_editable' => [
        'label' => 'Description English',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return $form->field($model, 'description[2][]')->textarea([
                'maxlength' => true,
                'value' => $model->getTitle(2)->description,
            ])->label(false);
        }
    ],
    'title_temp_english' => [
        'label' => 'Title Temp English',
        'value' => function($model) {
            return $model->getTitle(2)->title_temp;
        }
    ],
    'description_temp_english' => [
        'label' => 'Description Temp English',
        'value' => function($model) {
            return $model->getTitle(2)->description_temp;
        }
    ],
    'i_type' => [
        'label' => 'type',
        'value' => function($model) {
            return $model->getIType();
        }
    ],
    'i_comb_type_id' => [
        'label' => 'Comb type',
        'value' => function($model) {
            return $model->getICombType();
        }
    ],
    'color1' => [
        'label' => 'i_result_sector1_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector1_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector1_colorid);
        }
    ],
    'color2' => [
        'label' => 'i_result_sector2_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector2_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector2_colorid);
        }
    ],
    'color3' => [
        'label' => 'i_result_sector3_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector3_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector3_colorid);
        }
    ],
    'color4' => [
        'label' => 'i_result_sector4_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector4_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector4_colorid);
        }
    ],
    'color5' => [
        'label' => 'i_result_sector5_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector5_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector5_colorid);
        }
    ],
    'color6' => [
        'label' => 'i_result_sector6_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector6_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector6_colorid);
        }
    ],
    'color7' => [
        'label' => 'i_result_sector7_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector7_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector7_colorid);
        }
    ],
    'color8' => [
        'label' => 'i_result_sector8_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector8_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector8_colorid);
        }
    ],
    'color9' => [
        'label' => 'i_result_sector9_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector9_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector9_colorid);
        }
    ],
    'color10' => [
        'label' => 'i_result_sector10_colorid',
        'format' => 'html',
        'value' => function($model) {
            return $model->i_result_sector10_colorid == 0 ? null : sprintf('<div class="item-sector color-for-%s"></div>', $model->i_result_sector10_colorid);
        }
    ],
    'color1_description' => 'i_result_sector1_colorid_description',
    'color2_description' => 'i_result_sector2_colorid_description',
    'color3_description' => 'i_result_sector3_colorid_description',
    'color4_description' => 'i_result_sector4_colorid_description',
    'color5_description' => 'i_result_sector5_colorid_description',
    'color6_description' => 'i_result_sector6_colorid_description',
    'color7_description' => 'i_result_sector7_colorid_description',
    'color8_description' => 'i_result_sector8_colorid_description',
    'color9_description' => 'i_result_sector9_colorid_description',
    'color10_description' => 'i_result_sector10_colorid_description',
];
$columns_filtered = array();
$cl = Items::attributeLabelsCustom($pill, $step);
foreach ($cl[0] as $column) {
    $columns_filtered[] = $columns[$column];
}
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'layout' => '{items}',
    'columns' => [
        ...$columns_filtered,
        [
            'header' => '<div><span>Actions</span></div>',
            'headerOptions' => ['class' => 'join-left join-right'],
            'class' => ActionColumn::className(),
            'template' => $cl[1],
            'buttons' => [
                'translate' => function ($url, $model, $key) {
                    return Html::a('',
                        'javascript:;',
                        ['class' => 'icon forward-black label ajax-call', 'data-path' => '/admin/items/fixtranslation']
                    );
                },
                'checkmarkTranslator' => function ($url, $model, $key) use ($step) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 4]) ?
                        Html::a('<i class="fa fa-check ajax-call" data-path="/admin/items/checktranslator"></i>', 'javascript:;', [
                            'title' => 'accept',
                            'data-pjax' => '1',
                        ])
                        : '';
                },
                'checkmarkPsychologist' => function ($url, $model, $key) use ($step) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                        Html::a('<i class="fa fa-check ajax-call" data-path="/admin/items/checkpsychologist"></i>', 'javascript:;', [
                            'title' => 'accept',
                            'data-pjax' => '1',
                        ])
                        : '';
                },
                'checkmarkProfessor' => function ($url, $model, $key) use ($step) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 2]) ?
                        Html::a('<i class="fa fa-check ajax-call" data-path="/admin/items/checkprofessor"></i>', 'javascript:;', [
                            'title' => 'accept',
                            'data-pjax' => '1',
                        ])
                        : '';
                },
                'checkmarkAdmin' => function ($url, $model, $key) use ($step) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1]) ?
                        Html::a('<i class="fa fa-check ajax-call" data-path="/admin/items/checkadmin"></i>', 'javascript:;', [
                            'title' => 'accept',
                            'data-pjax' => '1',
                        ])
                        : '';
                },
                'colors' => function ($url, $model, $key) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                        Html::a('<i class="fa fa-tint ajax-call" data-path="/admin/items/fixcolors"></i>', 'javascript:;', [
                            'title' => 'Send to professor',
                            'data-pjax' => '1',
                        ]) :
                        '';
                },
                'restore' => function ($url, $model, $key) {
                    return Html::a('<i class="fa fa-refresh"></i>', $url, [
                        'title' => 'Restore',
                        'data-pjax' => '1',
                    ]);
                },
                'view' => function ($url, $model, $key) {
                    return  Html::a('<i class="fa fa-gear"></i>', $url, ['class' => 'bg-blue label']);
                },
                'delete' => function ($url, $model, $key) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                        Html::a('',
                            $url,
                            [
                                'class' => 'icon archive archive-red label',
                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                'data-method' => 'post',
                            ]
                        )
                        : '';
                },
                'save' => function ($url, $model, $key) {
                    return Html::a('',
                        'javascript:;',
                        ['class' => 'icon save-item save-filled label',]
                    );
                }
            ],

            'urlCreator' => function ($action, Items $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            }
        ],
    ],
]);