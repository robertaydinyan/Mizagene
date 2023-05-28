<?php

use yii\bootstrap5\Html;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = ['label' => '', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<h4>Welcome back, what you want to do?</h4>
<div class="row">
    <div class="col-3 card">
        <div class="card-header">
            <div class="d-flex card-title">
                <i class="fa fa-id-card" aria-hidden="true"></i>
                <h3 class="mx-2">Analytics</h3>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary detailed-button w-100"><a href="">Detailed</a></button>
        </div>
    </div>
</div>

<style>
    .card-header i {
        font-size: 40px;
        color: #ff8900;
    }
    .card {
        height: 160px;
        box-shadow: 0 4px 6px 0 rgb(85 85 85 / 8%), 0 1px 20px 0 rgb(0 0 0 / 7%), 0px 1px 11px 0px rgb(0 0 0 / 7%);
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
    }

    .detailed-button, .detailed-button:hover, .detailed-button:active {
        background: #ff8900 !important;
        border-color: #ff8900 !important;
    }

    .detailed-button a {
        text-decoration: none;
        color: white;
    }
</style>