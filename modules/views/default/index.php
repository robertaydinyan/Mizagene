<?php

use yii\bootstrap5\Html;
use app\modules\models\Items;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = ['label' => '', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<h4>Welcome back, what do you want to do?</h4>
<div class="row">
    <div class="col-3">
        <div class="card">
            <div class="card-header">
                <div class="d-flex card-title align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="/images/icons/active.png" width="40">
                        <!-- <i class="fa fa-id-card" aria-hidden="true"></i> -->
                        <h4 class="mx-2 my-0">Active Items </h3>
                    </div>
                    <div>
                        <?php echo Items::getTabElCount(1) == 0 ? "" : '<span class="pill-badge pill-badge-green">' . Items::getTabElCount(1) . '</span>'; ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary detailed-button button-green w-100"><a href="/admin/items/index?pill=1">Detailed</a></button>
            </div>
        </div>
        <div class="card card">
            <div class="card-header">
                <div class="d-flex card-title align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="/images/icons/migrate.png" width="40">
                        <h4 class="mx-2 my-0">Migrated base</h4>
                    </div>
                    <div>
                        <?php echo Items::getTabElCount(3) == 0 ? "" : '<span class="pill-badge pill-badge-dark">' . Items::getTabElCount(3) . '</span>'; ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary detailed-button button-grey w-100"><a href="/admin/items/index?pill=3">Detailed</a></button>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="d-flex card-title align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="/images/icons/create.png" width="40">
                        <h4 class="mx-2 my-0">Created base</h4>
                    </div>
                    <div>
                        <?php echo Items::getTabElCount(2) == 0 ? "" : '<span class="pill-badge pill-badge-dark">' . Items::getTabElCount(2) . '</span>'; ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary detailed-button button-grey w-100"><a href="/admin/items/index?pill=2">Detailed</a></button>
            </div>
        </div>
        <?php if ($subjects_count):
            $gender_1 = $subjects_count[1];
            $gender_2 = $subjects_count[2];
            $gender_3 = (isset($subjects_count[4]) ? $subjects_count[4] : 0) + (isset($subjects_count[3]) ? $subjects_count[3] : 0);
        ?>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex card-title align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <!-- <img src="/images/icons/create.png" width="40"> -->
                            <h4 class="mx-2 my-0">Subjects</h4>
                            <span><?php echo $gender_1 + $gender_2 + $gender_3; ?></span>
                        </div>
                        <div>
                        <?php
                            echo sprintf('
                                <span><i style="color: #0064e3" class="fa fa-mars-stroke"></i> %s</span>
                                <span><i style="color: #ff001d" class="fa fa-venus"></i> %s</span>
                                <span><i style="color: #ff8500" class="fa fa-transgender-alt"></i> %s</span>
                            ', 
                                $gender_1,
                                $gender_2,
                                $gender_3
                            );
                        ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary detailed-button button-grey w-100"><a href="/admin/subject/index">Detailed</a></button>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="col-3">
        <div class="card card3">
            <div class="card-header">
                <div class="d-flex card-title align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="/images/icons/group.png" width="40">
                        <h4 class="mx-2 my-0">Groups </h4>
                    </div>
                    <div>
                        <button class="btn btn-primary detailed-button button-green w-100"><a href="/admin/group/create">Create</a></button>
                    </div>
                </div>
            </div>
            <div class="card-footer card-footer-detailed">
                <div class="footer-details overflow-auto">
                    <?php if ($groups) {
                        foreach ($groups as $group) {
                            echo sprintf('
                                <div>
                                    <span class="col-6 report-group-title"><a href="admin/group/update?id=%s">%s</a></span>
                                    <span class="col-3 report-group-items-count" style="margin-left: 12px">%s(<span style="color: green;">%s</span>,<span style="color: red;">%s</span>)</span>
                                </div>',
                                
                                $group->id,
                                $group->title_english,
                                $group->getItemsCount(),
                                $group->getItemsCount(1),
                                $group->getItemsCount(0)
                            );      
                        }
                    } ?>
                </div>
                <button class="btn btn-primary detailed-button button-green w-100"><a href="/admin/group/index">Detailed</a></button>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card card3">
            <div class="card-header">
                <div class="d-flex card-title align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="/images/icons/report.png" width="40">
                        <h4 class="mx-2 my-0">Reports </h4>
                    </div>
                    <div>
                        <button class="btn btn-primary detailed-button button-blue w-100"><a href="/admin/reports/create">Create</a></button>
                    </div>
                </div>
            </div>
            <div class="card-footer card-footer-detailed">
                <div class="footer-details overflow-auto">
                    <?php if ($reports) {
                        foreach ($reports as $report) {
                            echo sprintf('
                                <span><a href="/admin/reports/update?id=%s">%s</a></span>
                            ',
                                
                                $report->id,
                                $report->title_english
                            );      
                        }
                    } ?>
                </div>
                <button class="btn btn-primary detailed-button button-blue w-100"><a href="/admin/reports/index">Detailed</a></button>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card card3">
            <div class="card-header">
                <div class="d-flex card-title align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="/images/icons/black-cat.png" width="40">
                        <h4 class="mx-2 my-0">To be checked </h4>
                    </div>
                    <div>
                        <!-- <button class="btn btn-primary detailed-button button-orange w-100"><a href="/admin/reports/create">Create</a></button> -->
                    </div>
                </div>
            </div>
            <div class="card-footer card-footer-detailed">
                <div class="footer-details overflow-auto">
                    <?php if ($disabled_items) {
                        foreach ($disabled_items as $disabled_item) {
                            echo sprintf('
                                <span data-toggle="tooltip" title="%s" data-bs-placement="left"><a href="/admin/items/update?id=%s">%s</a></span>
                            ',
                                
                                $disabled_item->getTitle(2)->description,
                                $disabled_item->id,
                                $disabled_item->getTitle(2)->title
                            );      
                        }
                    } ?>
                </div>
                <button class="btn btn-primary detailed-button button-orange w-100"><a href="/admin/reports/index">Detailed</a></button>
            </div>
        </div>
    </div>
    
    
</div>

<style>
    .card-header i {
        font-size: 16px;
    }
    .card {
        margin-top: 12px;
        margin-right: 12px;
        height: 160px;
        box-shadow: 0 4px 6px 0 rgb(85 85 85 / 8%), 0 1px 20px 0 rgb(0 0 0 / 7%), 0px 1px 11px 0px rgb(0 0 0 / 7%);
    }

    .card3 {
        height: 504px;
    }

    .card-header, .card-footer {
        padding: 0 !important;
        background: white;
    }

    .card-title {
        padding: 16px;
        margin: 0;
    }

    .card-footer {
        align-items: center;
        display: flex;
        height: 100%;
        padding: 12px !important;
    }

    .card-footer-detailed {
        flex-direction: column;
        height: 428px;
    }

    .footer-details {
        width: 100%;
        height: calc(100% - 88px);
        margin: 20px 0; 
        display: flex;
        flex-direction: column;
    }

    .footer-details a {
        text-decoration: none;
        color: black;
    }

    .button-orange, .button-orange:hover, .button-orange:active {
        background: #ff8900 !important;
        border-color: #ff8900 !important;
    }

    .detailed-button a {
        text-decoration: none;
        color: white;
    }

    .button-grey, .button-grey:hover, .button-grey:active {
        background: #464646 !important;
        border-color: #464646 !important;
    }

    .button-green, .button-green:hover, .button-green:active {
        background: #149518 !important;
        border-color: #149518 !important;
    }

    .button-blue, .button-blue:hover, .button-blue:active {
        background: #005d98 !important;
        border-color: #005d98 !important;
    }
</style>