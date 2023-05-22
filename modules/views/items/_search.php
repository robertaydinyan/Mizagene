<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\models\ItemsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="items-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'e2e_item_id') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'i_type') ?>

    <?= $form->field($model, 'i_usg_type') ?>

    <?php // echo $form->field($model, 'i_comb_type_id') ?>

    <?php // echo $form->field($model, 'e2e_item_ru') ?>

    <?php // echo $form->field($model, 'e2e_i_description_ru') ?>

    <?php // echo $form->field($model, 'e2e_item_en') ?>

    <?php // echo $form->field($model, 'e2e_i_description_en') ?>

    <?php // echo $form->field($model, 'e2e_item_ir') ?>

    <?php // echo $form->field($model, 'e2e_i_description_ir') ?>

    <?php // echo $form->field($model, 'i_result_sector1_colorid') ?>

    <?php // echo $form->field($model, 'i_result_sector2_colorid') ?>

    <?php // echo $form->field($model, 'i_result_sector3_colorid') ?>

    <?php // echo $form->field($model, 'i_result_sector4_colorid') ?>

    <?php // echo $form->field($model, 'i_result_sector5_colorid') ?>

    <?php // echo $form->field($model, 'i_result_sector6_colorid') ?>

    <?php // echo $form->field($model, 'i_result_sector7_colorid') ?>

    <?php // echo $form->field($model, 'i_result_sector8_colorid') ?>

    <?php // echo $form->field($model, 'i_result_sector9_colorid') ?>

    <?php // echo $form->field($model, 'i_result_sector10_colorid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
