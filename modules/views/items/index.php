<?php

/** @var yii\web\View $this */
/** @var app\modules\models\ItemsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var integer $pill */
/** @var integer $step */

use app\modules\models\Admin;
use app\modules\models\Items;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

<!--    <ul class="nav nav-pills mb-3" role="tablist">-->
<!--        --><?php
//        if ($tabs) {
//            foreach ($tabs as $i => $title) {
//                echo sprintf('
//                            <li class="nav-pills">
//                                <a class="nav-pill %s" href="?pill=%s"><span>%s</span> %s</a>
//                            </li>',
//                    $pill == $i ? "active" : "",
//                    $i,
//                    $title,
//                    Items::getTabElCount($i) == 0 ? "" : '<span class="pill-badge pill-badge-primary">' . Items::getTabElCount($i) . '</span>'
//                );
//            }
//        }?>
<!--    </ul>-->
    <?php if ($steps):
        $active_pill = $tabs[$pill]; ?>
        <div class="steps-container d-flex">
            <div class="d-flex col-2">
                <img class="b-icon" src="/images/icons/<?php echo $active_pill[1]; ?>" alt="">
                <div>
                    <h4><?php echo $active_pill[0];?></h4>
                    <span style="color: #2384ec"><?php echo Admin::$ROLES[Yii::$app->admin->getIdentity()->role]; ?></span>
                    <span>View</span>
                </div>
            </div>
            <ul class="nav nav-pills nav-pills-steps col-10" role="tablist">
                <?php
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
                            isset($active_steps[$i]) ? "pill-badge-primary" : "pill-badge-dark",
                            Items::getStepElCount($i)
                        );
                    }
                ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="grid-header mt-4 col-12 d-flex justify-content-between">
        <div class="form-group col-3">
            <input type="text" class="form-control item-search-bar" placeholder="search by parameter ID, or any language">
        </div>
        <div>
            <?= Html::a(' <i class="fa fa-plus"></i> Create Parameter', ['create'], ['class' => 'btn btn-dark']) ?>
        </div>
    </div>
    <?php $form = ActiveForm::begin(); ?>
    <?= Yii::$app->controller->renderFile('@app/modules/views/items/_items-list.php', [
        'form' => $form,
        'dataProvider' => $dataProvider,
        'pill' => $pill,
        'step' => $step,
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