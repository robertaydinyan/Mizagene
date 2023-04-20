<?php

use app\modules\models\Items;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\models\Items $model */
/** @var yii\widgets\ActiveForm $form */
/** @var app\modules\models\Language[] $languages */

$step = $model->getStep();
?>

<div class="items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if (in_array($step, [4, 5])): ?>
    <?php endif; ?>

    <?php if (in_array($step, [6, 7])): ?>
        <?= $form->field($model, 'i_result_sector1_colorid_description')->textInput(); ?>

        <?= $form->field($model, 'i_result_sector2_colorid_description')->textInput(); ?>

        <?= $form->field($model, 'i_result_sector3_colorid_description')->textInput(); ?>

        <?= $form->field($model, 'i_result_sector4_colorid_description')->textInput(); ?>

        <?= $form->field($model, 'i_result_sector5_colorid_description')->textInput(); ?>

        <?= $form->field($model, 'i_result_sector6_colorid_description')->textInput(); ?>

        <?= $form->field($model, 'i_result_sector7_colorid_description')->textInput(); ?>

        <?= $form->field($model, 'i_result_sector8_colorid_description')->textInput(); ?>

        <?= $form->field($model, 'i_result_sector9_colorid_description')->textInput(); ?>

        <?= $form->field($model, 'i_result_sector10_colorid_description')->textInput(); ?>
    <?php endif; ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
