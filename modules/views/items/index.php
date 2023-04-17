<?php

/** @var yii\web\View $this */
/** @var app\modules\models\ItemsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var integer $pill */
/** @var integer $step */

use app\modules\models\Items;
use yii\bootstrap5\ActiveForm;

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="items-index">
    <ul class="nav nav-pills mb-3" role="tablist">
        <?php if ($tabs) {
            foreach ($tabs as $i => $title) {
                echo sprintf('
                    <li class="nav-pills">
                        <a class="nav-pill %s" href="?pill=%s">%s <span class="pill-badge pill-badge-primary">%s</span></a>
                    </li>',
                    $pill == $i ? "active" : "",
                    $i,
                    $title,
                    Items::getTabElCount($i)
                );
            }
        }?>
    </ul>
    <ul class="nav nav-pills mb-3" role="tablist">
        <?php if ($steps) {
            $active_steps = Items::getActiveSteps();
            foreach ($steps as $i => $title) {
                echo sprintf('
                    <li class="nav-pills">
                        <a class="nav-pill %s" href="?pill=%s&step=%s">%s <span class="pill-badge %s">%s</span></a>
                    </li>',
                    $step == $i ? "active" : "",
                    $pill,
                    $i,
                    $title,
                    isset($active_steps[$i]) ? "pill-badge-danger" : "pill-badge-primary",
                    Items::getStepElCount($i)
                );
            }
        } ?>
    </ul>

    <div class="form-group col-3">
        <input type="text" class="form-control item-search-bar" placeholder="search by parameter ID, or any language">
    </div>
    <?php $form = ActiveForm::begin(); ?>
    <?= Yii::$app->controller->renderFile('@app/modules/views/items/_items-list.php', [
        'form' => $form,
        'dataProvider' => $dataProvider,
        'pill' => $pill,
        'step' => $step
    ]); ?>
    <?php ActiveForm::end(); ?>

</div>
<style>
    td {
        position: relative;
        /*min-width: 200px;*/
    }

    td textarea {
        min-width: 200px;
        min-height: 200px !important;
    }
</style>