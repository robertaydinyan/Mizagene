<?php
/** @var app\modules\models\Group $model */

use app\modules\models\Items;
use yii\bootstrap5\ActiveForm;

$this->title = 'Create Variant';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-create">
    <?= Yii::$app->controller->renderPartial('_menu.php'); ?>

    <?php $form = ActiveForm::begin(); ?>

    <div class="group-container d-flex">
        <?php echo $this->renderFile('@app/modules/views/group/_group-config.php', [
            'usg_types' => $usg_types,
            'comb_types' => $comb_types,
            'description_editable' => true
        ]); ?>

        <div class="group-content">
            <div class="group-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link nav-link-dark-blue " type="button" role="tab"
                                aria-controls="tabContent1">General settings
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link nav-link-dark-blue active" id="tab2"
                                data-bs-toggle="tab" data-bs-target="#tabContent2" type="button" role="tab"
                                aria-controls="tabContent2">Parameters building
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="tabContent2" role="tabpanel"
                         aria-labelledby="tab2">
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
                            <?php
                            $items = $variant ? json_decode($variant->items) : $model->items;
                            $item_description = $variant ? json_decode($variant->item_description) : null;
                            if ($items):
                                foreach ($items as $i => $item_id):
                                    $item = Items::findOne($item_id); ?>
                                    <div class="group-item d-flex">
                                        <div class="col-1 position-relative" style="border-right: 1px solid #d8d8d8;">
                                            <img class="absolute-center drag-event" src="/images/icons/dots-menu.png"
                                                 alt="">
                                            <input class="item-id" type="hidden" name="Group[items][]"
                                                   value="<?php echo $item->id; ?>">
                                        </div>
                                        <div class="col-11 group-item-content">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <span><i class="fa fa-circle <?php echo $item->check1 ? 'active' : 'disabled'; ?>"></i></span>
                                                    <span class="group-item-id"
                                                          style="color: #b4b4b4"><?php echo $item->id; ?></span>
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
                                            <span class="group-item-title"
                                                  style="color: #cc33e6; font-weight: 600;"><?php echo $item->getTitle(2)->title; ?></span><br>
                                            <textarea name="Group[item_description][]" cols="50" rows="2" class="group-item-description-editable" ><?php echo $item_description ? $item_description[$i] : $item->getTitle(2)->description; ?></textarea>
                                        </div>
                                    </div>
                                <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-dark-blue group-save">save as</button>
        </div>
    </div>

    <?php $form::end(); ?>
</div>