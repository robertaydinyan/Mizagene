<?php

use yii\bootstrap5\Html;
?>


<div class="col-3 group-config">
    <div class="d-flex">
        <input type="text" class="form-control" placeholder="Search by ID or text" name="search">
        <button class="btn btn-dark-blue update-report-groups" type="button">Filter</button>
        <!--                <a href="javascript:;" class="icon label update-items" data-query="GET" data-container=".group-config" data-path="" style="font-size: 24px; margin: -4px 4px;">-->
        <!--                    <i class="fa fa-sliders icon"></i>-->
        <!--                </a>-->
    </div>

    <div class="report-group-container">
        <div class="report-group report-group-template d-flex">
            <div class="col-1 position-relative" style="border-right: 1px solid #d8d8d8;">
                <img class="absolute-center drag-event" src="/images/icons/dots-menu.png" alt="">
                <input class="item-id" type="hidden" name="Reports[groups][]" value="" disabled>
            </div>
            <div class="col-11 report-group-content d-flex justify-content-between">
                <div class="report-group-main">
                    <div class="d-flex justify-content-between">
                        <span class="report-group-rule">18</span>
                        <span class="report-group-title" style="font-weight: 600;">Group</span>
                        <span class="report-group-items-count"></span>
                        <span class="report-group-versions"></span>
                    </div>
                </div>
                <div>
                    <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
