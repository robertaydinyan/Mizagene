<?php

use app\modules\models\Items;

/** @var yii\web\View $this */
/** @var app\modules\models\GroupSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Reports';
$this->params['breadcrumbs'][] = $this->title;
$usg_types = Items::getIUsgTypes();
$comb_types = Items::getICombTypes();
?>
<div class="report-index">
    <?= Yii::$app->controller->renderPartial('_menu.php'); ?>

    <div class="form-group col-3 ">
        <input type="text" class="form-control report-search-bar" placeholder="search">
    </div>

    <?= Yii::$app->controller->renderPartial('_reports-list', ['dataProvider' => $dataProvider]); ?>
</div>

