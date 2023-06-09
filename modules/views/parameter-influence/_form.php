<?php


use app\modules\models\Items;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\models\ParameterInfluence $model */
/** @var app\modules\models\Items[] $influenceItems */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="parameter-influence-container d-flex">
    <?php echo $this->renderFile('@app/modules/views/parameter-influence/_influence-config.php', [
        'usg_types' => $usg_types,
        'comb_types' => $comb_types
    ]); ?>

    <div class="parameter-influence-content col-9">
        <div class="group-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <input type="hidden" name="step" value="<?php echo $step; ?>">
                <li class="nav-item">
                    <button class="nav-link nav-link-dark-blue <?php echo $step == 1 ? 'active' : '' ?>" id="tab1" data-bs-toggle="tab" data-bs-target="#tabContent1" type="button" role="tab" aria-controls="tabContent1">General settings</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link nav-link-dark-blue <?php echo $step == 2 ? 'active' : '' ?>" id="tab2" data-bs-toggle="tab" data-bs-target="#tabContent2" type="button" role="tab" aria-controls="tabContent2">Builder</button>
                </li>
<!--                <li class="nav-item">-->
<!--                    <button class="nav-link nav-link-dark-blue --><?php //echo $step == 3 ? 'active' : '' ?><!--" id="tab2" data-bs-toggle="tab" data-bs-target="#tabContent3" type="button" role="tab" aria-controls="tabContent3">Rules</button>-->
<!--                </li>-->
            </ul>
            <div class="tab-content">
                <div class="tab-pane col-12 <?php echo $step == 1 ? 'show active' : '' ?>" id="tabContent1" role="tabpanel" aria-labelledby="tab1">
                    <div >
                        <div>
                            <?= $form->field($model, 'type', ['options' => ['class' => 'custom-radio']])->radioList(Items::getITypes(), ['class' => 'd-flex'])->label(false); ?>
                        </div>
                        <div class="d-flex">
                            Item: <?= $form->field($model, 'item_id', ['options' => ['class' => 'col-11']])->dropDownList([0 => ''] + $influenceItems, ['class' => 'form-control items-select select2'])->label(false); ?>
                        </div>

                        <hr style="color: white;">
                        <div class="droppable" style="min-height: 300px; display: flow-root;">
                            <?php if (isset($model->items)) {
                                foreach ($model->items as $item_inf) {
                                    echo $this->renderFile('@app/modules/views/parameter-influence/_item.php', [
                                        'template' => false,
                                        'item_inf' => $item_inf,
                                    ]);
                                }
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane <?php echo $step == 2 ? 'show active' : '' ?>" id="tabContent2" role="tabpanel" aria-labelledby="tab2">
                    <div class="row">
                        <div class="col-10 d-flex overflow-auto" style="align-self: flex-start;">
                            <table class="influence-item-rules">
                                <thead>
                                    <tr class="item-rule-row">
                                        <th class="fixed-column">Item</th>
                                        <th>weight</th>
                                        <th>%</th>
                                        <th>lv</th>
                                        <th>uv</th>
                                        <th>c</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if ($model->items):
                                    foreach ($model->items as $i => $item_inf):
                                        $item = $item_inf->item;
                                        if (!$item->check1) { echo '<input type="text" id="disabledItem" value="1">'; break; } ?>
                                        <tr class="item-rule-row item-rule-<?php echo $item->id; ?>" data-id="<?php echo $item->id; ?>">
                                            <td class="item-rule-cell fixed-column">
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-circle <?php echo $item->check1 ? ($item->disabled ? 'passive' : 'active') : 'disabled'; ?>" style="margin-right: 12px"></i>
                                                    <span class="group-item-title-ru" data-toggle="tooltip" title="<?php echo $item->getTitle(1)->title; ?>"><?php echo $item->getTitle(1)->title; ?></span>
                                                    <span class="group-item-title-en" data-toggle="tooltip" title="<?php echo $item->getTitle(2)->title; ?>" style="display: none;"><?php echo $item->getTitle(2)->title; ?></span>
                                                </div>
                                            </td>
                                            <td class="item-rule-cell">
                                                <input type="number" class="form-control weight" step="0.01" name="Item[weight][]" value="<?php echo $item_inf->weight ?: 1; ?>">
                                            </td>
                                            <td class="item-rule-cell">
                                                <span class="weight-percentage"></span>
                                            </td>
                                            <td class="item-rule-cell">
                                                <?php
                                                $item_inf->lower_value = $item_inf->lower_value ?: [''];
                                                foreach ($item_inf->lower_value as $lw) {
                                                    echo sprintf(
                                                        '<input type="number" class="form-control lower" name="Item[%s][lower][]" value="%s">',

                                                        $item_inf->item_id,
                                                        $lw
                                                    );
                                                }
                                                ?>
                                            </td>
                                            <td class="item-rule-cell">
                                                <?php
                                                $item_inf->upper_value = $item_inf->upper_value ?: [''];
                                                foreach ($item_inf->upper_value as $uw) {
                                                    echo sprintf(
                                                        '<input type="number" class="form-control upper" name="Item[%s][upper][]" value="%s">',

                                                        $item_inf->item_id,
                                                        $uw
                                                    );
                                                }
                                                ?>
                                            </td>
                                            <td class="item-rule-cell">
                                                <?php
                                                $item_inf->coefficient = $item_inf->coefficient ?: [''];
                                                foreach ($item_inf->coefficient as $c) {
                                                    echo sprintf(
                                                        '<input type="number" step="0.01" class="form-control" name="Item[%s][coefficient][]" value="%s">',

                                                        $item_inf->item_id,
                                                        $c
                                                    );
                                                }
                                                ?>
                                            </td>
                                            <td class="item-rule-cell"><a class="add-rule" href="javascript:;">+</a></td>
                                        </tr>
                                    <?php endforeach;
                                endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-2">
                            <select class="select2 influence-subjects" multiple>
                                <option value=""></option>
                                <?php if ($subjects) {
                                    foreach ($subjects as $subject) {
                                        echo sprintf('<option value="%s" selected>%s</option>', $subject->id, $subject->name);
                                    }
                                } ?>
                            </select>
                            <table class="result-table table">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>result</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-dark-blue group-save">save</button>
        <?php if ($model->pushed == 0 && $step == 3 && Yii::$app->admin->getIdentitY()->role == 1): ?>
            <input type="submit" class="btn btn-dark-blue group-save" value="push" name="push">
        <?php endif; ?>
    </div>
</div>

<style>
    /*.item-rule-cell {*/
    /*    margin: 4px;*/
    /*    height: 40px;*/
    /*}*/

    /*.influence-item-rules .item-rule-cell {*/
    /*    max-width: 72px;*/
    /*}*/

    .item-rule-row:nth-child(odd) {
        box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.05);
    }

    .add-rule {
        color: black;
        text-decoration: none;
        font-size: 33px;
        margin: 0;
    }

    .fixed-column {
        max-width: 200px;
        min-width: 200px;
    }

    .item-rule-cell {
        padding: 4px;
    }

    .item-rule-cell:not(.fixed-column) {
        max-width: 60px;
        min-width: 60px;
    }

    .subject-column img, .result-table img {
        height: 60px;
    }

    .fixed-column {
        position: sticky;
        left: 0;
        z-index: 1;
        background-color: #fff;
    }
</style>