<?php
use app\modules\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap5\ActiveForm;

if (isset($source)) {
    $form = ActiveForm::begin();
}
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
        'value' => function($model) {
            return sprintf('
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column">
                        %s
                        %s
                    </div>
                    <span>%s</span>
                </div>',

                $model->priority ? ('<div class="icon m-icon priority-' . $model->priority . '"></div>') : '',
                $model->comment ? ('<div class="icon m-icon comment"  data-toggle="tooltip" title="' . $model->comment . '"></div>') : '',
                $model->item_id
            );
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
            <img class="flag-icon-g" src="/images/icons/google.png" alt="Google">
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
    'russian' => [
        'header' => '<div class="title-label">
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

                $model->getTitle(1)->title,
                $model->getTitle(1)->description
            );
        }
    ],
    'russian_editable' => [
        'header' => '<div class="title-label">
            <img class="flag-icon" src="/images/icons/flag1.jpg" alt="Russian">
            <div class="title-label-content">
                <span>Title</span>
                <span>Description</span>
            </div>
        </div>',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return '<div class="title-value">' .
                $form->field($model, 'title[1]')->textarea([
                    'maxlength' => true,
                    'value' => $model->getTitle(1)->title,
                    'class' => 'form-control required'
                ])->label(false) .
                $form->field($model, 'description[1]')->textarea([
                    'maxlength' => true,
                    'value' => $model->getTitle(1)->description,
                    'class' => 'form-control required'
                ])->label(false) .
            '</div>';
        }
    ],
    'english_temp' => [
        'header' => '<div class="title-label title-label-disabled">
            <img class="flag-icon-g" src="/images/icons/google.png" alt="Google">
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
    'english' => [
        'header' => '<div class="title-label">
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

                $model->getTitle(2)->title,
                $model->getTitle(2)->description
            );
        }
    ],
    'english_editable' => [
        'header' => '<div class="title-label">
            <img class="flag-icon" src="/images/icons/flag2.png" alt="English">
            <div class="title-label-content">
                <span>Title</span>
                <span>Description</span>
            </div>
        </div>',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return '<div class="title-value">' .
                $form->field($model, 'title[2]')->textarea([
                    'maxlength' => true,
                    'value' => $model->getTitle(2)->title,
                    'class' => 'form-control required'
                ])->label(false) .
                $form->field($model, 'description[2]')->textarea([
                    'maxlength' => true,
                    'value' => $model->getTitle(2)->description,
                    'class' => 'form-control required'
                ])->label(false) .
            '</div>';
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
    'results' => [
        'header' => '<div><span>Results</span></div>',
        'headerOptions' => ['class' => 'join-right'],
        'label' => 'Results',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return sprintf('<div>
                   <div class="color-spector color-for-%s">%s</div>
                   <div class="color-spector color-for-%s">%s</div>
                   <div class="color-spector color-for-%s">%s</div>
                   <div class="color-spector color-for-%s">%s</div>
                   <div class="color-spector color-for-%s">%s</div>
                   <div class="color-spector color-for-%s">%s</div>
                   <div class="color-spector color-for-%s">%s</div>
                   <div class="color-spector color-for-%s">%s</div>
                   <div class="color-spector color-for-%s">%s</div>
                   <div class="color-spector color-for-%s">%s</div>
                   <p>save the colors</p>
                </div>',


                $model->i_result_sector1_colorid,
                $form->field($model, 'i_result_sector1_colorid')->hiddenInput(['class' => 'required'])->label(false),
                $model->i_result_sector2_colorid,
                $form->field($model, 'i_result_sector2_colorid')->hiddenInput(['class' => 'required'])->label(false),
                $model->i_result_sector3_colorid,
                $form->field($model, 'i_result_sector3_colorid')->hiddenInput(['class' => 'required'])->label(false),
                $model->i_result_sector4_colorid,
                $form->field($model, 'i_result_sector4_colorid')->hiddenInput(['class' => 'required'])->label(false),
                $model->i_result_sector5_colorid,
                $form->field($model, 'i_result_sector5_colorid')->hiddenInput(['class' => 'required'])->label(false),
                $model->i_result_sector6_colorid,
                $form->field($model, 'i_result_sector6_colorid')->hiddenInput(['class' => 'required'])->label(false),
                $model->i_result_sector7_colorid,
                $form->field($model, 'i_result_sector7_colorid')->hiddenInput(['class' => 'required'])->label(false),
                $model->i_result_sector8_colorid,
                $form->field($model, 'i_result_sector8_colorid')->hiddenInput(['class' => 'required'])->label(false),
                $model->i_result_sector9_colorid,
                $form->field($model, 'i_result_sector9_colorid')->hiddenInput(['class' => 'required'])->label(false),
                $model->i_result_sector10_colorid,
                $form->field($model, 'i_result_sector10_colorid')->hiddenInput(['class' => 'required'])->label(false)

            );
        }
    ],
//                   <div class="color-spector color-status-%s color-for-%s">%s</div>
//                   <div class="color-spector color-status-%s color-for-%s">%s</div>
//                   <div class="color-spector color-status-%s color-for-%s">%s</div>
//                   <div class="color-spector color-status-%s color-for-%s">%s</div>
//                   <div class="color-spector color-status-%s color-for-%s">%s</div>
//                   <div class="color-spector color-status-%s color-for-%s">%s</div>
//                   <div class="color-spector color-status-%s color-for-%s">%s</div>
//                   <div class="color-spector color-status-%s color-for-%s">%s</div>
//                   <div class="color-spector color-status-%s color-for-%s">%s</div>
    'results_description' => [
        'header' => '<div><span>Results</span></div>',
        'headerOptions' => ['class' => 'join-right'],
        'label' => 'Results',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return sprintf('<div>
                   <div class="color-spector color-for-%s">
                        <span>%s</span>
                        %s
                   </div>
                   <p>save the colors</p>
                </div>',


                $model->i_result_sector1_colorid,
                $model->i_result_sector1_colorid_description ? "+" : "-",
                $form->field($model, 'i_result_sector1_colorid')->hiddenInput(['class' => 'required'])->label(false)
//                $model->i_result_sector2_colorid,
//                $form->field($model, 'i_result_sector2_colorid')->hiddenInput(['class' => 'required'])->label(false),
//                $model->i_result_sector3_colorid,
//                $form->field($model, 'i_result_sector3_colorid')->hiddenInput(['class' => 'required'])->label(false),
//                $model->i_result_sector4_colorid,
//                $form->field($model, 'i_result_sector4_colorid')->hiddenInput(['class' => 'required'])->label(false),
//                $model->i_result_sector5_colorid,
//                $form->field($model, 'i_result_sector5_colorid')->hiddenInput(['class' => 'required'])->label(false),
//                $model->i_result_sector6_colorid,
//                $form->field($model, 'i_result_sector6_colorid')->hiddenInput(['class' => 'required'])->label(false),
//                $model->i_result_sector7_colorid,
//                $form->field($model, 'i_result_sector7_colorid')->hiddenInput(['class' => 'required'])->label(false),
//                $model->i_result_sector8_colorid,
//                $form->field($model, 'i_result_sector8_colorid')->hiddenInput(['class' => 'required'])->label(false),
//                $model->i_result_sector9_colorid,
//                $form->field($model, 'i_result_sector9_colorid')->hiddenInput(['class' => 'required'])->label(false),
//                $model->i_result_sector10_colorid,
//                $form->field($model, 'i_result_sector10_colorid')->hiddenInput(['class' => 'required'])->label(false)

            );
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
    'types' => [
        'header' => '<div><span>Types(Type, Usage, Combination)</span></div>',
        'headerOptions' => ['class' => 'join-left'],
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return sprintf('<div class="d-flex col-12">
                    <div class="col-6">%s</div> 
                    <div class="col-6">%s</div>
                </div> 
                <div>%s</div>',
                $form->field($model, 'i_type')->dropDownList(Items::getITypes(), ['class' => 'required'])->label(false),
                $form->field($model, 'i_usg_type')->dropDownList(Items::getIUsgTypes(), ['class' => 'required'])->label(false),
                $form->field($model, 'i_comb_type_id')->dropDownList(Items::getICombTypes(), ['class' => 'required'])->label(false)
            );
        }
    ],
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
            'header' => Html::a('', 'javascript:;',
                [
                    'class' => 'icon save-white label',
                ]
            ),
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
                        Html::a('',
                            'javascript:;', [
                            'class' => 'icon forward-black label ajax-call',
                            'data-path' => '/admin/items/checktranslator'
                        ])
                        : '';
                },
                'declinePsychologist' => function ($url, $model, $key) use ($step) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                        Html::a('',
                            'javascript:;', [
                                'class' => 'icon backward label ajax-call',
                                'data-path' => '/admin/items/declinepsychologist'
                            ])
                        : '';
                },
                'checkmarkPsychologist' => function ($url, $model, $key) use ($step) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                        Html::a('',
                            'javascript:;', [
                                'class' => 'icon forward-black label ajax-call',
                                'data-path' => '/admin/items/checkpsychologist'
                            ])
                        : '';
                },
                'checkmarkProfessor' => function ($url, $model, $key) use ($step) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 2]) ?
                        Html::a('',
                            'javascript:;', [
                                'class' => 'icon forward-black label ajax-call',
                                'data-path' => '/admin/items/checkprofessor'
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
                        Html::a('',
                            'javascript:;',
                            ['class' => 'icon forward-black label ajax-call', 'data-path' => '/admin/items/fixcolors']
                        ) :
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