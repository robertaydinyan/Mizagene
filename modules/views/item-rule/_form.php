<?php

use app\modules\models\Items;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\models\ItemRule $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="item-rule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['maxlength' => true]) ?>

    <div class="row">
        <?= $form->field($model, 'type', ['options' => ['class' => 'col-2']])->dropDownList(Items::getITypes(), ['class' => 'form-control rule-type']) ?>

        <?= $form->field($model, 'sub_min_age', ['options' => ['class' => 'col-2']])->textInput() ?>

        <?= $form->field($model, 'sub_max_age', ['options' => ['class' => 'col-2']])->textInput() ?>

        <?= $form->field($model, 'obj_min_age', ['options' => ['class' => 'col-2']])->textInput() ?>

        <?= $form->field($model, 'obj_max_age', ['options' => ['class' => 'col-2']])->textInput() ?>
    </div>
    <br>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
