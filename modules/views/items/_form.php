<?php

use app\modules\models\Items;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\models\Items $model */
/** @var yii\widgets\ActiveForm $form */
/** @var app\modules\models\Language[] $languages */
?>

<div class="items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if (!in_array(Yii::$app->admin->getIdentity()->role, [4])): ?>
        <?= $form->field($model, 'e2e_item_id')->textInput() ?>

        <? //$form->field($model, 'item_id')->textInput() ?>

        <?= $form->field($model, 'i_type')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'i_usg_type')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'i_comb_type_id')->textInput(['maxlength' => true]) ?>

    <?php endif; ?>
    <?php if ($languages) {
        foreach ($languages as $language) {
            echo $form->field($model, 'title[' . $language->id . ']')->textInput([
                'maxlength' => true,
                'value' => $model->getTitle($language->id)->title,
            ])->label('Title ' . $language->language);
            echo $form->field($model, 'description[' . $language->id . ']')->textInput([
                'maxlength' => true,
                'value' => $model->getTitle($language->id)->description,
            ])->label('Description ' . $language->language);
        }
    } ?>

    <?php if (!in_array(Yii::$app->admin->getIdentity()->role, [4])): ?>
        <?= $form->field($model, 'i_result_sector1_colorid')->dropDownList(Items::getColorRange()); ?>

        <?= $form->field($model, 'i_result_sector2_colorid')->dropDownList(Items::getColorRange()); ?>

        <?= $form->field($model, 'i_result_sector3_colorid')->dropDownList(Items::getColorRange()); ?>

        <?= $form->field($model, 'i_result_sector4_colorid')->dropDownList(Items::getColorRange()); ?>

        <?= $form->field($model, 'i_result_sector5_colorid')->dropDownList(Items::getColorRange()); ?>

        <?= $form->field($model, 'i_result_sector6_colorid')->dropDownList(Items::getColorRange()); ?>

        <?= $form->field($model, 'i_result_sector7_colorid')->dropDownList(Items::getColorRange()); ?>

        <?= $form->field($model, 'i_result_sector8_colorid')->dropDownList(Items::getColorRange()); ?>

        <?= $form->field($model, 'i_result_sector9_colorid')->dropDownList(Items::getColorRange()); ?>

        <?= $form->field($model, 'i_result_sector10_colorid')->dropDownList(Items::getColorRange()); ?>
    <?php endif; ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
