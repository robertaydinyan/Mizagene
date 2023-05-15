<?php

use app\modules\models\GroupVariants;
use app\modules\models\Items;

/** @var app\modules\models\Items $model */
/** @var app\modules\models\GroupVariants[] $group_variants */

$this->title = 'Reports';
$this->params['breadcrumbs'][] = $this->title;
$usg_types = Items::getIUsgTypes();
$comb_types = Items::getICombTypes();
?>
<div class="report-container d-flex">
    <?php echo $this->renderFile('@app/modules/views/reports/_report-config.php', [
        'usg_types' => $usg_types,
        'comb_types' => $comb_types
    ]); ?>

    <div class="report-content">
        <div class="report-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <input type="hidden" name="step" value="<?php echo $step; ?>">
                <li class="nav-item">
                    <button class="nav-link nav-link-dark-blue <?php echo $step == 1 ? 'active' : '' ?>" id="tab1" data-bs-toggle="tab" data-bs-target="#tabContent1" type="button" role="tab" aria-controls="tabContent1">General settings</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link nav-link-dark-blue <?php echo $step == 2 ? 'active' : '' ?>" id="tab2" data-bs-toggle="tab" data-bs-target="#tabContent2" type="button" role="tab" aria-controls="tabContent2">Parameters building</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane <?php echo $step == 1 ? 'show active' : '' ?>" id="tabContent1" role="tabpanel" aria-labelledby="tab1">
                    <div class="d-flex">
                        <div class="col-2"><span>Report Title</span></div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <img class="flag-icon" src="/images/icons/flag1.jpg" alt="Russian" style="margin: 8px;">
                            <?= $form->field($model, 'title_russian', ['options' => ['style' => 'width: 100%']])->textInput(['placeholder' => 'Report Title (Russian)'])->label(false); ?>
                        </div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <img class="flag-icon" src="/images/icons/flag2.png" alt="English" style="margin: 8px;">
                            <?= $form->field($model, 'title_english', ['options' => ['style' => 'width: 100%']])->textInput(['placeholder' => 'Report Title (English)'])->label(false); ?>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-2"><span>Report Description</span></div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <span class="flag-icon" style="margin: 8px;"></span>
                            <?= $form->field($model, 'description_russian', ['options' => ['style' => 'width: 100%']])->textarea()->label(false); ?>
                        </div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <span class="flag-icon" style="margin: 8px;"></span>
                            <?= $form->field($model, 'description_english', ['options' => ['style' => 'width: 100%']])->textarea()->label(false); ?>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-2"><span>Region</span></div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <span class="flag-icon" style="margin: 8px;"></span>
                            <?= $form->field($model, 'region', ['options' => ['style' => 'width: 100%']])->dropDownList($regions, ['multiple' => 'multiple', 'class' => 'select2', 'value' => array_keys($regions)])->label(false); ?>
                        </div>
                        <div class="col-5 d-flex" style="padding-left: 28px; padding-right: 8px; margin: 16px 0;">
                            <div class="col-5"></div>
                            <div class="col-7 d-flex justify-content-between">
                                <span class="mr-2">Icon</span>
                                <?= $form->field($model, 'icon')->fileInput()->label(false);?>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-2"><span>Comment</span></div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <span class="flag-icon" style="margin: 8px;"></span>
                            <?= $form->field($model, 'comment', ['options' => ['style' => 'width: 100%']])->textarea()->label(false); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane <?php echo $step == 2 ? 'show active' : '' ?>" id="tabContent2" role="tabpanel" aria-labelledby="tab2">
                    <div class="d-flex">
                        <div class="col-2"><span>ID <?php echo $model->id; ?></span></div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <img class="flag-icon change-group-item-language language-russian" src="/images/icons/flag1.jpg" alt="Russian" style="margin: 8px;">
                            <span><?php echo $model->title_russian; ?></span>
                        </div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <img class="flag-icon change-group-item-language language-english" src="/images/icons/flag2.png" alt="English" style="margin: 8px;">
                            <span><?php echo $model->title_english; ?></span>
                        </div>
                    </div>
                    <hr style="color: white;">
                    <div class="group-droppable droppable" style="min-height: 300px">
                        <?php if ($model->groups) {
                            foreach ($model->groups as $variant_id) {
                                $variant = GroupVariants::findOne($variant_id);
                                if ($variant) {
                                    echo $this->renderFile('@app/modules/views/reports/_variant.php', [
                                        'template' => false,
                                        'variant' => $variant,
                                    ]);
                                }
                            }
                        } ?>
                    </div>

                </div>
            </div>
        </div>
        <button class="btn btn-dark-blue group-save">save</button>
    </div>
</div>
