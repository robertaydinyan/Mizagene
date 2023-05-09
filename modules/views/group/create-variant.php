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
            'variant' => true
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
                                <img class="flag-icon change-group-item-language language-russian" src="/images/icons/flag1.jpg" alt="Russian" style="margin: 8px;">
                                <span><?php echo $model->title_russian; ?></span>
                            </div>
                            <div class="col-5 d-flex" style="padding: 10px;">
                                <img class="flag-icon change-group-item-language language-english" src="/images/icons/flag2.png" alt="English" style="margin: 8px;">
                                <span><?php echo $model->title_english; ?></span>
                            </div>
                        </div>
                        <hr style="color: white;">
                        <div class="group-droppable droppable" style="min-height: 300px; display: flow-root;">
                            <?php
                            $item_description_ru = $variant->item_description_ru;
                            $item_description_en = $variant->item_description_en;
                            $items = $variant ? (is_array($variant->items) ? $variant->items : json_decode($variant->items)) : $model->items;
                            if (isset($items)) {
                                foreach ($items as $i => $item_id) {
                                    $item = Items::findOne($item_id);
                                    echo $this->renderFile('@app/modules/views/group/_item.php', [
                                        'template' => false,
                                        'item' => $item,
                                        'variant' => true,
                                        'description_ru' => $item_description_ru[$i],
                                        'description_en' => $item_description_en[$i]
                                    ]);
                                }
                            } ?>


                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-dark-blue group-save">save as</button>
        </div>
    </div>

    <?php $form::end(); ?>
</div>