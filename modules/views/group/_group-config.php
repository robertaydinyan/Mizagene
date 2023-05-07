<?php

use yii\bootstrap5\Html;
?>


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
                <input class="item-id" type="hidden" name="Group[items][]" value="" disabled>
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
                <?php if (isset($description_editable)): ?>
                    <textarea name="Group[item_description][]" cols="50" rows="2" class="group-item-description-editable" disabled></textarea>
                <?php else: ?>
                    <span class="group-item-description" data-toggle="tooltip" title=""></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
