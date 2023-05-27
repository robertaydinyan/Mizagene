<?php

use app\modules\models\Items;

if (!isset($item_inf)) {
    $item_inf = new \app\modules\models\ParameterInfluenceItem();
}

$item = isset($item_inf->item) ? $item_inf->item : new Items();
?>

<div class="group-item <?php echo $template ? 'group-item-template' : ''; ?> d-flex">
    <div class="col-1 form-group <?php echo $template ? 'd-none' : 'd-flex'; ?>  align-items-center">
        <input name="Item[weight][]" type="number" class="form-control" value="<?php echo $item_inf->weight; ?>" <?php echo $template ? 'disabled' : ''; ?>>
    </div>
    <div class="col-1 position-relative" style="border-right: 1px solid #d8d8d8;">
        <img class="absolute-center drag-event" src="/images/icons/dots-menu.png" alt="">
        <input class="item-id" type="hidden" name="Item[item_id][]" value="<?php echo $item->id; ?>" <?php echo $template ? 'disabled' : ''; ?>>
    </div>
    <div class="col-11 group-item-content">
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <span><i class="fa fa-circle <?php echo $item->check1 ? ($item->disabled ? 'passive' : 'active') : 'disabled'; ?>"></i></span>
                <span class="group-item-id" style="color: #b4b4b4; margin-left: 8px;"><?php echo $item->id; ?></span>
            </div>
            <div class="group-item-source-1 col-8 <?php echo $item->source == 0 ? 'd-none' : ''; ?>">
                <img src="/images/icons/Mizagene_small.png" alt="" height="16">
                <span style="color: #b4b4b4">migrated</span>
            </div>
            <div class="group-item-source-0 col-8 <?php echo $item->source == 1 ? 'd-none' : ''; ?>">
                <img src="/images/icons/youmee_small.png" alt="" height="16">
            </div>
        </div>
        <span class="group-item-title-ru" style="color: #cc33e6; font-weight: 600; display: none;"><?php echo $item->getTitle(1)->title; ?></span>
        <span class="group-item-title-en" style="color: #cc33e6; font-weight: 600;"><?php echo $item->getTitle(2)->title; ?></span>
        <br>
        <div>
            <span class="group-item-description-ru" data-toggle="tooltip" title="<?php echo $item->getTitle(1)->description; ?>" style="display: none;"><?php echo $item->getTitle(1)->description; ?></span>
        </div>
        <div>
            <span class="group-item-description-en" data-toggle="tooltip" title="<?php echo$item->getTitle(2)->description; ?>"><?php echo $item->getTitle(2)->description; ?></span>
        </div>
    </div>
</div>

