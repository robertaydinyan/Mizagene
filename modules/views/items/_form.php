<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\models\Items $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'e2e_item_id')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'i_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'i_usg_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'i_comb_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e2e_item_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e2e_i_description_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e2e_item_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e2e_i_description_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e2e_item_ir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e2e_i_description_ir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'i_result_sector1_colorid')->textInput() ?>

    <?= $form->field($model, 'i_result_sector2_colorid')->textInput() ?>

    <?= $form->field($model, 'i_result_sector3_colorid')->textInput() ?>

    <?= $form->field($model, 'i_result_sector4_colorid')->textInput() ?>

    <?= $form->field($model, 'i_result_sector5_colorid')->textInput() ?>

    <?= $form->field($model, 'i_result_sector6_colorid')->textInput() ?>

    <?= $form->field($model, 'i_result_sector7_colorid')->textInput() ?>

    <?= $form->field($model, 'i_result_sector8_colorid')->textInput() ?>

    <?= $form->field($model, 'i_result_sector9_colorid')->textInput() ?>

    <?= $form->field($model, 'i_result_sector10_colorid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
