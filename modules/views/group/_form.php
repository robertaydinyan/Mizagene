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
    <div class="col-3 group-config">
        <div class="d-flex">
            <input type="text" class="form-control" placeholder="Search by ID or text" name="search">
            <div class="dropdown">
                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 24px; margin: -4px 4px;">
                    <i class="fa fa-sliders icon" style="color: #003c47"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                    <div class="dropdown-content px-4 py-3">
                        <div class="d-flex">
                            <div class="col-2">
                                <img src="/images/icons/flag2.png" class="flag-icon flag-changeable">
                                <input type="hidden" name="language" value="2">
                            </div>
                            <div class="d-flex col-10 justify-content-around">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="SingleCheckbox" class="item-type-checkbox" value="1" name="type" checked>
                                    <label for="SingleCheckbox">Single</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="MultipleCheckbox" class="item-type-checkbox" value="2" name="type">
                                    <label for="MultipleCheckbox">Multiple</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label class="mb-2">By <span style="color: #cc33e6">usage</span> type</label><br>
                            <select class="select2 item-usage-type" multiple="multiple" name="usg_types[]">
                                <?php if (isset($usg_types)) {
                                    foreach ($usg_types as $value => $type) {
                                        echo sprintf('<option value="%s">%s</option>', $value, $type);
                                    }
                                } ?>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label class="mb-2">By <span style="color: #cc33e6">combination</span> type</label><br>
                            <select class="select2 item-comb-type" multiple="multiple" name="usg_comb_types[]">
                                <?php if (isset($comb_types)) {
                                    foreach ($comb_types as $value => $type) {
                                        echo sprintf('<option value="%s">%s</option>', $value, $type);
                                    }
                                } ?>
                            </select>
                        </div>
                        <div class="events d-flex justify-content-between">
                            <button class="btn btn-reset" type="button">Reset</button>
                            <button class="btn btn-dark-blue update-group-items" type="button">Filter</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--                <a href="javascript:;" class="icon label update-items" data-query="GET" data-container=".group-config" data-path="" style="font-size: 24px; margin: -4px 4px;">-->
            <!--                    <i class="fa fa-sliders icon"></i>-->
            <!--                </a>-->
        </div>

        <div class="group-item-container">
            <div class="group-item group-item-template d-flex">
                <div class="col-1 position-relative" style="border-right: 1px solid #d8d8d8;">
                    <img class="absolute-center drag-event" src="/images/icons/dots-menu.png" alt="">
                </div>
                <div class="col-11 group-item-content">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span><i class="fa fa-circle"></i></span>
                            <span class="group-item-id" style="color: #b4b4b4"></span>
                        </div>
                        <div class="group-item-source-1 col-8 d-none">
                            <img src="/images/icons/Mizagene_small.png" alt="" height="16">
                            <span style="color: #b4b4b4">migrated</span>
                        </div>
                        <div class="group-item-source-0 col-8 d-none">
                            <img src="/images/icons/youmee_small.png" alt="" height="16">
                        </div>
                        <span class="group-item-rule">18</span>
                    </div>
                    <span class="group-item-title" style="color: #cc33e6; font-weight: 600;"></span><br>
                    <span class="group-item-description" data-toggle="tooltip" title=""></span>
                </div>
            </div>
        </div>
    </div>
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
                <li class="nav-item">
                    <button class="nav-link nav-link-dark-blue <?php echo $step == 3 ? 'active' : '' ?>" id="tab3" data-bs-toggle="tab" data-bs-target="#tabContent3" type="button" role="tab" aria-controls="tabContent3">Parameters building</button>
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
                    <div class="droppable" style="min-height: 300px">
                    </div>
                </div>
                <div class="tab-pane <?php echo $step == 3 ? 'show active' : '' ?>" id="tabContent3" role="tabpanel" aria-labelledby="tab3">
                    <p>Content for the Contact tab goes here.</p>
                </div>
            </div>
        </div>
        <button class="btn btn-dark-blue group-save">save</button>
    </div>
</div>
