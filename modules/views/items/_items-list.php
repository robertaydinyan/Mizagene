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
        'headerOptions' => ['style' => 'max-width: 55px;'],
        'value' => function($model) use ($pill) {
            return sprintf('
                    <span>%s</span>
                    <div class="d-flex flex-column">
                        <img class="icon" src="/images/icons/%s.png">
                        %s
                        %s
                        %s
                    </div>
                ',

                $model->item_id ?: $model->id,
                $model->source ? 'Mizagene_small' : 'youmee_small',
                $pill != 1 ? ($model->priority ? ('<div class="icon m-icon priority-' . $model->priority . '"></div>') : '') : '',
                $pill != 1 ? (in_array($model->getStep(), [2, 3])  ? ($model->comment ? ('<div class="icon m-icon comment"  data-toggle="tooltip" title="' . $model->comment . '"></div>') : '') : '') : '',
                $pill == 1 ? Html::a('',
                    'javascript:;',
                    ['class' => 'icon item-mark label ' . ($model->mark ? 'black-cat' : 'white-cat')]
                ) : ''
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
            return $form->field($model, 'i_usg_type')->dropDownList(
                Items::getIUsgTypes(),
                ['multiple' => 'multiple', 'class' => 'required form-control item-usage-type select2'],
            )->label(false);
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
        'header' => '<div><span>Quick edit</span></div>',
        'headerOptions' => ['class' => ''],
        'label' => 'Results',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return sprintf('<div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <p>save the colors</p>
                </div>',


                $model->getColorSector(1)->color_id,
                $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(1)->color_id])->label(false),
                $model->getColorSector(2)->color_id,
                $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(2)->color_id])->label(false),
                $model->getColorSector(3)->color_id,
                $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(3)->color_id])->label(false),
                $model->getColorSector(4)->color_id,
                $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(4)->color_id])->label(false),
                $model->getColorSector(5)->color_id,
                $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(5)->color_id])->label(false),
                $model->getColorSector(6)->color_id,
                $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(6)->color_id])->label(false),
                $model->getColorSector(7)->color_id,
                $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(7)->color_id])->label(false),
                $model->getColorSector(8)->color_id,
                $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(8)->color_id])->label(false),
                $model->getColorSector(9)->color_id,
                $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(9)->color_id])->label(false),
                $model->getColorSector(10)->color_id,
                $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(10)->color_id])->label(false)

            );
        }
    ],
    'results_description_ru_editable' => [
        'header' => '<div class="title-label">
            <img class="flag-icon" src="/images/icons/flag1.jpg" alt="Russian">
            <span style="margin-left: 4px;">Result</span>
        </div>',
        'label' => 'Results',
        'format' => 'raw',
        'value' => function($model) use ($form, $status) {
            $left = '';
            for ($i = 1; $i <= 10; $i++) {
                $left .= sprintf('
                    <div class="color-spector color-for-%s position-relative color-spector-description %s">
                        <i class="fa fa-%s absolute-center" data-change="%s"></i>
                   </div>',

                    $model->getColorSector($i)->color_id,
                    $model->getColorSector($i)->status == 2 ? 'border border-dark' : '',
                    $i == 1 ? 'circle' : ($status == 2 ? '' : ($model->getColorSector($i)->description_ru ? "plus" : "minus")),
                    $status == 1
                );
            }
            $right = '';
            for ($i = 1; $i <= 10; $i++) {
                $right .= sprintf('
                    <div class="color-spector-detailed %s">
                        <div class="d-flex justify-content-between">
                            <div>
                               <span class="align-super">%s | <b>zone %s</b> | %s%% </span>
                            </div>
                            <div class="d-flex">
                                %s
                                <a class="btn btn-dark small-button save-result-description" href="javascript:;" data-text="%s"> save </a>
                            </div>
                       </div>
                       %s
                   </div>',

                    $i == 1 ? '' : 'd-none',
                    $model->getColorSector($i)->color,
                    $i,
                    ($i * 10 - 9) . '-' . ($i * 10),
                    $status == 2 ?
                        Html::a('',
                            'javascript:;',
                            [
                                'class' => 'icon comment mt-0',
                                'data-toggle' => 'tooltip',
                                'title' => $model->getColorSector($i)->comment
                            ]
                        )
                    : '',
                    $model->getColorSector($i)->description_ru,
                    $form->field($model, 'colorSectors[description_ru][' . ($i - 1) . ']')->textarea(['class' => 'form-control required result-description', 'value' => $model->getColorSector($i)->description_ru])->label(false)
                );
            }

            return sprintf('<div class="d-flex">
                   <div class="col-5">
                       %s
                       <div class="mt-4">
                            <span>Parameter Type: <b>%s</b></span><br>
                            <span>Parameter Usage Type: <b>%s</b></span><br>
                            <span>Combination Type: <b>%s</b></span>
                       </div>
                   </div>
                   <div class="col-7 cp-detailed-container">
                       %s
                   </div>
                </div>',

                $left,
                $model->type,
                $model->usgType,
                $model->combType,
                $right
            );
        }
    ],
    'results_description_en_editable' => [
        'header' => '<div class="title-label">
            <img class="flag-icon" src="/images/icons/flag2.png" alt="English">
            <span style="margin-left: 4px;">Result</span>
        </div>',
        'label' => 'Results',
        'format' => 'raw',
        'value' => function($model) use ($form, $status) {
            $left = '';
            for ($i = 1; $i <= 10; $i++) {
                $left .= sprintf('
                    <div class="color-spector color-for-%s position-relative color-spector-description %s">
                        <i class="fa fa-%s absolute-center" data-change="%s"></i>
                   </div>',

                    $model->getColorSector($i)->color_id,
                    $model->getColorSector($i)->status == 2 ? 'border border-dark' : '',
                    $i == 1 ? 'circle' : ($status == 2 ? '' : ($model->getColorSector($i)->description_en ? "plus" : "minus")),
                    $status == 1
                );
            }

            $middle = '';
            for ($i = 1; $i <= 10; $i++) {
                $middle .= sprintf('<span class="%s">%s</span>',
                    $i == 1 ? '' : 'd-none',
                    $model->getColorSector($i)->description_ru
                );
            }

            $right = '';
            for ($i = 1; $i <= 10; $i++) {
                $right .= sprintf('
                    <div class="color-spector-detailed %s">
                        <div class="d-flex justify-content-between">
                            <div>
                               <span class="align-super">%s | <b>zone %s</b> | %s%% </span>
                            </div>
                            <div class="d-flex">
                                %s
                                <a class="btn btn-dark small-button save-result-description" href="javascript:;" data-text="%s"> save </a>
                            </div>
                       </div>
                       %s
                   </div>',

                    $i == 1 ? '' : 'd-none',
                    $model->getColorSector($i)->color,
                    $i,
                    ($i * 10 - 9) . '-' . ($i * 10),
                    $status == 2 ?
                        Html::a('',
                            'javascript:;',
                            [
                                'class' => 'icon comment mt-0',
                                'data-toggle' => 'tooltip',
                                'title' => $model->getColorSector($i)->comment
                            ]
                        )
                        : '',
                    $model->getColorSector($i)->description_en,
                    $form->field($model, 'colorSectors[description_en][' . ($i - 1) . ']')->textarea(['class' => 'form-control required result-description', 'value' => $model->getColorSector($i)->description_en])->label(false)
                );
            }

            return sprintf('<div class="d-flex">
                   <div class="col-5">
                       %s
                       <div class="mid-container">
                           %s
                       </div>
                   </div>
                   <div class="col-7 cp-detailed-container">
                       %s
                   </div>
                </div>',

                $left,
                $middle,
                $right
            );
        }
    ],

    'results_description_en_check' => [
        'header' => '<div class="title-label">
            <img class="flag-icon" src="/images/icons/flag2.png" alt="English">
            <span style="margin-left: 4px;">Result</span>
        </div>',
        'label' => 'Results',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            $left = '';
            for ($i = 1; $i <= 10; $i++) {
                $left .= sprintf('
                    <div class="color-spector color-for-%s position-relative color-spector-description">
                        <i class="absolute-center fa %s" data-status="%s">%s</i>
                   </div>',

                    $model->getColorSector($i)->color_id,
                    $i == 1 ? 'fa-circle' : '',
                    $model->getColorSector($i)->statusT,
                    $i != 1 ? $model->getColorSector($i)->statusT : ''
                );
            }
            $right = '';

            for ($i = 1; $i <= 10; $i++) {
                $right .= sprintf('
                    <div class="color-spector-detailed %s">
                        <div class="d-flex justify-content-between">
                            <div>
                               <div class="color-spector color-for-%s position-relative"></div>
                               <span class="align-super">%s | <b>zone %s</b> | %s%% </span>
                            </div>
                            <div class="d-flex flex-column" data-id="%s">
                                <a class="btn btn-dark small-button accept-result-description" href="javascript:;"> accept </a>
                                <a class="btn btn-danger small-button decline-result-description mt-1" href="javascript:;" data-bs-toggle="modal" data-bs-target="#DeclineComment"> decline </a>
                            </div>
                       </div>
                       %s
                   </div>',

                    $i == 1 ? '' : 'd-none',
                    $model->getColorSector($i)->color,
                    $model->getColorSector($i)->color,
                    $i,
                    ($i * 10 - 9) . '-' . ($i * 10),
                    $model->getColorSector($i)->id,
                    $model->getColorSector($i)->description_en
                );
            }

            return sprintf('<div class="d-flex">
                   <div class="col-5 cp-container">
                       %s
                       <div class="mt-4">
                            <span>Parameter Type: <b>%s</b></span><br>
                            <span>Parameter Usage Type: <b>%s</b></span><br>
                            <span>Combination Type: <b>%s</b></span>
                       </div>
                   </div>
                   <div class="col-7 cp-detailed-container">
                       %s
                   </div>
                </div>',

                $left,
                $model->type,
                $model->usgType,
                $model->combType,
                $right
            );
        }
    ],
    'results_description' => [
        'header' => '<div class="title-label">
            <span style="margin-left: 4px;">Result</span>
        </div>',
        'label' => 'Results',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            $left = '';
            for ($i = 1; $i <= 10; $i++) {
                $left .= sprintf('
                    <div class="color-spector color-for-%s position-relative color-spector-description">
                   </div>',

                    $model->getColorSector($i) ? $model->getColorSector($i)->color_id : 0
                );
            }

            $right = '';
            for ($i = 1; $i <= 10; $i++) {
                $right .= sprintf('
                    <div class="color-spector-detailed %s">
                        <div class="d-flex justify-content-between">
                            <div>
                               <div class="color-spector color-for-%s position-relative"></div>
                               <span class="align-super">%s | <b>zone %s</b> | %s%% </span>
                            </div>
                       </div>
                       <p>%s</p>
                       <p>%s</sp>
                   </div>',

                    $i == 1 ? '' : 'd-none',
                    $model->getColorSector($i) ? $model->getColorSector($i)->color : 0,
                    $model->getColorSector($i) ? $model->getColorSector($i)->color : 0,
                    $i,
                    ($i * 10 - 9) . '-' . ($i * 10),
                    $model->getColorSector($i) ? $model->getColorSector($i)->description_en : null,
                    $model->getColorSector($i) ? $model->getColorSector($i)->description_ru : null
                );
            }

            return sprintf('<div class="d-flex">
                   <div class="col-5 cp-container">
                       %s
                       <div class="mt-4">
                            <span>Parameter Type: <b>%s</b></span><br>
                            <span>Parameter Usage Type: <b>%s</b></span><br>
                            <span>Combination Type: <b>%s</b></span>
                       </div>
                   </div>
                   <div class="col-7 cp-detailed-container">
                       %s
                   </div>
                </div>',

                $left,
                $model->type,
                $model->usgType,
                $model->combType,
                $right
            );
        }
    ],
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
                $form->field($model, 'i_type')->dropDownList(Items::getITypes(), ['multiple' => 'multiple', 'class' => 'required form-control item-type select2'])->label(false),
                $form->field($model, 'i_usg_type')->dropDownList(
                    \yii\helpers\ArrayHelper::map(\app\modules\models\UsgType::find()->asArray()->all(), 'id', 'name'),
                    ['multiple' => 'multiple', 'class' => 'required form-control item-usage-type select2', 'value' => $model->i_usg_type]
                )->label(false),
                $form->field($model, 'i_comb_type_id')->dropDownList(Items::getICombTypes(), ['multiple' => 'multiple', 'class' => 'item-comb-type select2'])->label(false)
            );
        }
    ],
    'gender_editable' => [
        'header' => '<div><span>Gender</span></div>',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return $form->field($model, 'gender')->dropDownList(Items::getGenders())->label(false);
        }
    ],
    'delete_date' => [
        'header' => '<div><span>Delete date</span></div>',
        'format' => 'raw',
        'value' => function($model) {
            return $model->delete_date;
        }
    ],
    'rule_editable' => [
        'header' => '<div><span>Rule</span></div>',
        'format' => 'raw',
        'value' => function($model) use ($form) {
            return $form->field($model, 'rule_id')->dropDownList(
                [0 => ''] + \yii\helpers\ArrayHelper::map(\app\modules\models\ItemRule::find()->all(), 'id', 'name')
            )->label(false);
        }
    ]
];
$columns_filtered = array();
$cl = Items::attributeLabelsCustom($pill, $step);
foreach ($cl[0] as $column) {
    $columns_filtered[] = $columns[$column];
}
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'pager' => [
        'hideOnSinglePage' => true,
    ],
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
                                'class' => 'icon backward-black label ajax-call',
                                'data-path' => '/admin/items/declinepsychologist'
                            ])
                        : '';
                },
                'declineProfessor' => function ($url, $model, $key) use ($step) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                        Html::a('',
                            'javascript:;', [
                                'class' => 'icon backward-black label ajax-call',
                                'data-path' => '/admin/items/decline-professor'
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
                        Html::a('',
                            'javascript:;', [
                                'class' => 'icon push-black label ajax-call',
                                'data-path' => '/admin/items/checkadmin'
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
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                        Html::a('',
                            'javascript:;',
                            ['class' => 'icon restore label ajax-call', 'data-path' => $url]
                        ) :
                        '';
                },
                'view' => function ($url, $model, $key) {
                    return  Html::a('<i class="fa fa-gear"></i>', $url, ['class' => 'bg-blue label']);
                },
                'delete' => function ($url, $model, $key) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                        Html::a('',
                            'javascript:;',
                            ['class' => 'icon archive archive-red label ajax-call', 'data-path' => $url, 'data-confirm_' => Yii::t('yii', 'Are you sure you want to delete this item?')]
                        )
                        : '';
                },
                'remove' => function ($url, $model, $key) {
                    return in_array(Yii::$app->admin->getIdentity()->role, [1, 3]) ?
                        Html::a('',
                            'javascript:;',
                            ['class' => 'icon remove label ajax-call', 'data-path' => $url, 'data-confirm_' => Yii::t('yii', 'Are you sure you want to delete this item?')]
                        )
                        : '';
                },
                'save' => function ($url, $model, $key) {
                    return Html::a('',
                        'javascript:;',
                        ['class' => 'icon save-item save-filled label',]
                    );
                },
                'disable' => function($url, $model, $key) {
                    return sprintf('
                        <label class="switch">
                            <input type="checkbox" %s>
                            <span class="slider round active-item-disable"></span>
                        </label><br>',

                        !$model->disabled ? "checked" : ""
                    );
                },
                'update' => function($url, $model, $key) {
                    return Html::a('',
                        $url,
                        ['class' => 'icon update label']
                    );
                }
            ],
            'urlCreator' => function ($action, Items $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            }
        ],
    ],
]);