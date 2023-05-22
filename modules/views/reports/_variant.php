<?php

use app\modules\models\Items;

if (!isset($variant)) $variant = new \app\modules\models\GroupVariants();
?>
<div class="report-group" style="padding: 4px;">
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
                <span class="col-6 report-group-title" style="font-weight: 600;"><?php echo $variant->group ? ($variant->group->title_english . ' ' . $variant->name) : ''; ?></span>
                <span class="col-3 report-group-items-count" style="margin-left: 12px"><?php echo $variant->getItemsCount(); ?>(<span style="color: green;"><?php echo $variant->getItemsCount(1); ?></span>,<span style="color: red;"><?php echo $variant->getItemsCount(0); ?></span>)</span>
                <span class="col-1 report-group-versions">v<?php echo $variant->getVariantsCount(); ?></span>
                <span class="col-1"><i class="fa fa-caret-up"></i></span>
            </div>
        </div>
    </div>
    <div class="collapse">
        <div class="d-flex flex-wrap" style="background: white;">
            <?php if ($variant->items) {
                $item_description_ru = $variant->item_description_ru;
                $item_description_en = $variant->item_description_en;
                $t = 0;
                foreach ($variant->items as $i => $item_id) {
                    $item = Items::findOne($item_id);
                    echo $this->renderFile('@app/modules/views/group/_item.php', [
                        'template' => $template,
                        'item' => $item,
                        'variant' => true,
                        'description_ru' => $item_description_ru ? $item_description_ru[$t] : null,
                        'description_en' => $item_description_en ? $item_description_en[$t] : null
                    ]);
                    $t++;
                }
            } ?>
        </div>
    </div>
</div>
