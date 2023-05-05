<?php

use app\modules\models\Group;
use app\modules\models\Items;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var app\modules\models\Items $model */

$this->title = 'Groups';
$this->params['breadcrumbs'][] = $this->title;
$usg_types = Items::getIUsgTypes();
$comb_types = Items::getICombTypes();
?>
<div class="group-container d-flex">
    <?php echo $this->renderFile('@app/modules/views/group/_group-config.php'); ?>

    <div class="group-content">
        <div class="group-tabs">
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
                        <div class="col-2"><span>Group Title</span></div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <img class="flag-icon" src="/images/icons/flag1.jpg" alt="Russian" style="margin: 8px;">
                            <?= $form->field($model, 'title_russian', ['options' => ['style' => 'width: 100%']])->textInput(['placeholder' => 'Group Title (Russian)'])->label(false); ?>
                        </div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <img class="flag-icon" src="/images/icons/flag2.png" alt="English" style="margin: 8px;">
                            <?= $form->field($model, 'title_english', ['options' => ['style' => 'width: 100%']])->textInput(['placeholder' => 'Group Title (English)'])->label(false); ?>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-2"><span>Group Description</span></div>
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
                            <?= $form->field($model, 'adult', ['options' => ['class' => 'custom-checkbox col-4']])->checkbox()->label('18+'); ?>
                            <div class="col-1"></div>
                            <div class="col-7 d-flex justify-content-between">
                                <span class="mr-2">Icon</span>
                                <?= $form->field($model, 'icon')->fileInput()->label(false);?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane <?php echo $step == 2 ? 'show active' : '' ?>" id="tabContent2" role="tabpanel" aria-labelledby="tab2">
                    <div class="d-flex">
                        <div class="col-2"><span>ID <?php echo $model->id; ?></span></div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <img class="flag-icon" src="/images/icons/flag1.jpg" alt="Russian" style="margin: 8px;">
                            <span><?php echo $model->title_russian; ?></span>
                        </div>
                        <div class="col-5 d-flex" style="padding: 10px;">
                            <img class="flag-icon" src="/images/icons/flag2.png" alt="English" style="margin: 8px;">
                            <span><?php echo $model->title_english; ?></span>
                        </div>
                    </div>
                    <hr style="color: white;">
                    <div class="group-droppable droppable" style="min-height: 300px">
                        <?php if ($model->items):
                            foreach ($model->items as $item_id):
                                $item = Items::findOne($item_id); ?>
                                <div class="group-item d-flex">
                                    <div class="col-1 position-relative" style="border-right: 1px solid #d8d8d8;">
                                        <img class="absolute-center drag-event" src="/images/icons/dots-menu.png" alt="">
                                        <input class="item-id" type="hidden" name="Group[items][]" value="<?php echo $item->id; ?>" >
                                    </div>
                                    <div class="col-11 group-item-content">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <span><i class="fa fa-circle <?php echo $item->check1 ? 'active' : 'disabled'; ?>"></i></span>
                                                <span class="group-item-id" style="color: #b4b4b4"><?php echo $item->id; ?></span>
                                            </div>
                                            <div class="group-item-source-1 col-8 <?php echo $item->source == 0 ? 'd-none' : ''; ?>">
                                                <img src="/images/icons/Mizagene_small.png" alt="" height="16">
                                                <span style="color: #b4b4b4">migrated</span>
                                            </div>
                                            <div class="group-item-source-0 col-8 <?php echo $item->source == 1 ? 'd-none' : ''; ?>">
                                                <img src="/images/icons/youmee_small.png" alt="" height="16">
                                            </div>
                                            <span class="group-item-rule">18</span>
                                        </div>
                                        <span class="group-item-title" style="color: #cc33e6; font-weight: 600;"><?php echo $item->getTitle(2)->title; ?></span><br>
                                        <span class="group-item-description" data-toggle="tooltip" title=""><?php echo $item->getTitle(2)->description; ?></span>
                                    </div>
                                </div>
                        <?php endforeach;
                    endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-dark-blue group-save">save</button>
        <?php if ($step == 2 && Yii::$app->admin->getIdentitY()->role == 1): ?>
            <input type="submit" class="btn btn-dark-blue group-save" value="push" name="push">
        <?php endif; ?>
    </div>
</div>
