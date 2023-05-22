<?php

use yii\bootstrap5\Html;
?>


<div class="col-3 group-config">
    <div class="d-flex">
        <input type="text" class="form-control group-input-search" placeholder="Search by ID or text" name="search" style="box-shadow: unset;">
        <div class="dropdown">
            <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 24px; margin: -4px 0px -4px 12px;">
                <i class="fa fa-sliders icon" style="color: #003c47"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                <div class="dropdown-content px-4 py-3">
                    <div class="d-flex">
                        <div class="col-2">
                            <img src="/images/icons/flag2.png" class="flag-icon flag-changeable">
                            <input type="hidden" name="language" value="2" class="item-group-language">
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
        <?php
            echo $this->renderFile('@app/modules/views/group/_item.php', [
                'template' => true,
                'variant' => isset($variant)
            ]);
        ?>

    </div>
</div>
