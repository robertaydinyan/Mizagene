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
use yii\helpers\Url;

$tabs = Items::getTabs();
$this->title = $tabs[$pill][0];
$this->params['breadcrumbs'][] = $this->title;
$active_pill = $tabs[$pill];
?>
<div class="steps-container d-flex">
    <div class="d-flex col-2 align-items-center">
        <img class="m-icon" src="/images/icons/<?php echo $active_pill[1]; ?>" alt="">
        <div style="margin-left: 12px;">
            <input type="hidden" value="<?php echo $pill?>" id="itemPill">
            <h4 class="m-0"><?php echo $active_pill[0];?></h4>
        </div>
    </div>
    <ul class="nav nav-pills nav-pills-steps col-10" role="tablist">
        <?php
        if (in_array($pill, [2, 3])) {
            if ($steps) {
                $active_steps = Items::getActiveSteps($pill);
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
                        Items::getStepElCount($pill, $i)
                    );
                }
            }
        }
        ?>
    </ul>
</div>
<div class="grid-header mt-4 col-12 d-flex justify-content-between">
    <div class="form-group col-6 d-flex" style="margin: 0 12px;">
        <div class="col-5">
            <?php echo \yii\widgets\LinkPager::widget([
                'pagination' => $dataProvider->pagination,
            ]); ?>
        </div>
        <div class="form-group col-6 ">
            <input type="text" class="form-control item-search-bar" placeholder="Search by parameter ID, or any language">
        </div>
        <div class="form-group col-4 mx-3">
            <select class="form-control item-search-bar select2" multiple data-placeholder="Search by usage type" >
                <?php 
                if ($usgTypes) {
                    foreach ($usgTypes as $usgType) {
                        echo sprintf('<option value="%s">%s</option>', $usgType->id, $usgType->name);
                    }
                } ?>
            </select>
        </div>
        <?php if (in_array($step, [6, 7])): ?>
            <div class="col-6">
                <?= Html::a('In process', ["?pill=$pill&step=$step&status=1"], ['class' => 'btn ' . ($status == 1 ? 'btn-dark' : '')]) ?>
                <?= Html::a('Returned', ["?pill=$pill&step=$step&status=2"], ['class' => 'btn ' . ($status == 2 ? 'btn-dark' : '')]) ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if (in_array(Yii::$app->admin->identity->role, [1, 3])): ?>
        <div>
            <?= Html::a(' Create Parameter', ['create'], ['class' => 'btn btn-dark', 'style' => 'margin-right: 20px; background: #f08900; border-color: #f08900;']) ?>
        </div>
    <?php endif; ?>
</div>
<?php $form = ActiveForm::begin(); ?>
<?= Yii::$app->controller->renderFile('@app/modules/views/items/_items-list.php', [
    'form' => $form,
    'dataProvider' => $dataProvider,
    'pill' => $pill,
    'step' => $step,
    'status' => $status
]); ?>
<?php ActiveForm::end(); ?>

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

<!-- Modal -->
<div class="modal fade" id="DeclineComment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">write below comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control description-comment">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary confirm-description-comment">Save changes</button>
            </div>
        </div>
    </div>
</div>