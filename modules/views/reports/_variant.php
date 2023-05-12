<?php

use app\modules\models\Items;

if (!isset($variant)) $variant = new \app\modules\models\GroupVariants();
?>
<div class="accordion-item report-group <?php echo $template ? 'report-group-template' : ''; ?>" style="padding: 4px;">
    <div class="report-group-content d-flex justify-content-between h-100 align-items-center"
         data-bs-toggle="collapse"
         data-bs-target="#collapseItem<?php echo $template ? 'template' : $variant->id; ?>"
         aria-expanded="true"
    >
        <div class="position-relative" style="border-right: 1px solid #d8d8d8;width: 20px;">
            <img class="drag-event" src="/images/icons/dots-menu.png" alt="" style="">
            <input class="item-id" type="hidden" name="Reports[groups][]" value="<?php echo $variant->id; ?>" <?php echo $template ? 'disabled' : ''?>>
        </div>
        <div class="report-group-main col-4">
            <div class="d-flex justify-content-between">
                <div class="col-1">
                    <span class="report-group-rule <?php echo $variant->group ? $variant->group->adult ? '' : 'd-none' : ''; ?>">18</span>
                </div>
                <span class="col-8 report-group-title" style="font-weight: 600;"><?php echo $variant->group ? ($variant->group->title_english . ' ' . $variant->name) : ''; ?></span>
                <span class="col-2 report-group-items-count" style="margin-left: 12px"><?php echo $variant->getItemsCount(); ?></span>
                <span class="col-1 report-group-versions">versions <?php echo $variant->getVariantsCount(); ?></span>
            </div>
        </div>
    </div>
<!--    <div id="collapseItem--><?php //echo $template ? 'template' : $variant->id; ?><!--"-->
<!--         class="accordion-collapse collapse"-->
<!--         data-bs-parent="#accordion">-->
<!--        <div class="accordion-body d-flex">-->
<!--            --><?php //if (!$template && $variant->items) {
//                foreach ($variant->items as $item_id) {
//                    $item = Items::findOne($item_id);
//
//                    echo $this->renderFile('@app/modules/views/group/_item.php', [
//                        'template' => false,
//                        'item' => $item,
//                    ]);
//                }
//            } ?>
<!--        </div>-->
<!--    </div>-->
</div>
