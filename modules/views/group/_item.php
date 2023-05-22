<?php

use app\modules\models\Items;

if (!isset($item)) {
    $item = new Items();
}

if (!isset($description_ru)) {
    $description_ru = null;
}

if (!isset($description_en)) {
    $description_en = null;
}
?>

<div class="group-item <?php echo $template ? 'group-item-template' : ''; ?> d-flex">
    <div class="col-1 position-relative" style="border-right: 1px solid #d8d8d8;">
        <img class="absolute-center drag-event" src="/images/icons/dots-menu.png" alt="">
        <input class="item-id" type="hidden" name="Group[items][]" value="<?php echo $item->id; ?>" <?php echo $template ? 'disabled' : ''; ?>>
    </div>
    <div class="col-11 group-item-content">
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <span><i class="fa fa-circle <?php echo $item->check1 ? ($item->disabled ? 'passive' : 'active') : 'disabled'; ?>"></i></span>
                <span class="group-item-id" style="color: #b4b4b4; margin-left: 8px;"><?php echo $item->item_id; ?></span>
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
        <?php if (isset($variant) && $variant): ?>
            <textarea name="Group[item_description_ru][]" rows="2" class="group-item-description-ru-editable" <?php echo $template ? 'disabled' : ''; ?> style="display: none;width: 100%"><?php echo $description_ru ?: $item->getTitle(1)->description; ?></textarea>
            <textarea name="Group[item_description_en][]" rows="2" class="group-item-description-en-editable" <?php echo $template ? 'disabled' : ''; ?> style="width: 100%"><?php echo $description_en ?: $item->getTitle(2)->description; ?></textarea>
        <?php else: ?>
            <div>
                <input type="hidden" name="Group[item_description_ru][]" class="group-item-description-ru-editable" <?php echo $template ? 'disabled' : ''; ?> value="<?php echo $description_ru ?: $item->getTitle(1)->description; ?>">
                <span class="group-item-description-ru" data-toggle="tooltip" title="<?php echo $description_ru ?: $item->getTitle(1)->description; ?>" style="display: none;"><?php echo $description_ru ?: $item->getTitle(1)->description; ?></span>
            </div>
            <div>
                <input type="hidden" name="Group[item_description_en][]" class="group-item-description-en-editable" <?php echo $template ? 'disabled' : ''; ?> value="<?php echo $description_en ?: $item->getTitle(2)->description; ?>">
                <span class="group-item-description-en" data-toggle="tooltip" title="<?php echo $description_en ?: $item->getTitle(2)->description; ?>"><?php echo $description_en ?: $item->getTitle(2)->description; ?></span>
            </div>
        <?php endif; ?>
    </div>
</div>

