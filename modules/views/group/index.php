<?php

use app\modules\models\Group;
use app\modules\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\models\GroupSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Groups';
$this->params['breadcrumbs'][] = $this->title;
$usg_types = Items::getIUsgTypes();
?>
<div class="group-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="group-container d-flex">
        <div class="col-2 group-config">
            <div>
                <span>Parameters</span>
                <img src="/images/icons/flag2.png" class="flag-icon flag-changeable">
                <input type="hidden" name="language" value="2">
            </div>
            <div class="d-flex">
                <select class="select2" multiple="multiple" name="usg_types[]">
                    <optgroup label="Single">
                        <?php if ($usg_types) {
                            foreach ($usg_types as $value => $type) {
                                echo sprintf('<option value="1-%s">%s</option>', $value, $type);
                            }
                        } ?>
                    </optgroup>
                    <optgroup label="Multiple">
                        <?php if ($usg_types) {
                            foreach ($usg_types as $value => $type) {
                                if ($value > 20)
                                    echo sprintf('<option value="2-%s">%s</option>', $value, $type);
                            }
                        } ?>
                    </optgroup>
                </select>
                <a href="javascript:;" class="icon label update-items" data-query="GET" data-container=".group-config" data-path="/admin/items/get-active-items" style="font-size: 24px; margin: -4px 4px;"><i class="fa fa-filter icon"></i></a>
            </div>

            <div class="items-container">

            </div>
        </div>
        <div class="col-10 group-content">

        </div>
    </div>
</div>
