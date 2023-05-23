<?php


use app\modules\models\Items;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\models\ParameterInfluence $model */
/** @var app\modules\models\Items[] $influenceItems */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="parameter-influence-container d-flex">
    <?php echo $this->renderFile('@app/modules/views/group/_group-config.php', [
        'usg_types' => $usg_types,
        'comb_types' => $comb_types
    ]); ?>

    <div class="parameter-influence-content">
        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <?= $form->field($model, 'type', ['options' => ['class' => 'custom-radio']])->radioList(Items::getITypes(), ['class' => 'd-flex'])->label(false); ?>

            <?= $form->field($model, 'item_id', ['options' => ['class' => 'col-2']])->dropDownList([0 => ''] + $influenceItems, ['class' => 'form-control items-select']); ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div>
</div>