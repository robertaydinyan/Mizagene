<?php

use app\modules\models\ItemColors;
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

    <?= $form->field($model, 'title[1]')->textarea([
        'maxlength' => true,
        'value' => $model->getTitle(1)->title,
        'class' => 'form-control required'
    ])->label('title ru') ?>
    <?= $form->field($model, 'description[1]')->textarea([
        'maxlength' => true,
        'value' => $model->getTitle(1)->description,
        'class' => 'form-control required'
    ])->label('description ru') ?>

    <?= $form->field($model, 'title[2]')->textarea([
        'maxlength' => true,
        'value' => $model->getTitle(2)->title,
        'class' => 'form-control required'
    ])->label('title en') ?>
    <?= $form->field($model, 'description[2]')->textarea([
        'maxlength' => true,
        'value' => $model->getTitle(2)->description,
        'class' => 'form-control required'
    ])->label('description en') ?>

    <?= $form->field($model, 'i_type')->dropDownList(Items::getITypes(), ['multiple' => 'multiple', 'class' => 'required form-control item-type select2']); ?>

    <?= $form->field($model, 'i_usg_type')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\modules\models\UsgType::find()->asArray()->all(), 'id', 'name'),
        ['multiple' => 'multiple', 'class' => 'required form-control item-usage-type select2', 'value' => $model->i_usg_type]
    ); ?>
    <?= $form->field($model, 'i_comb_type_id')->dropDownList(Items::getICombTypes(), ['multiple' => 'multiple', 'class' => 'item-comb-type select2']); ?>

    <?php for($i = 1; $i <= 10; $i++) {
        echo $form->field($model, 'colorSectors[color_id][]')->dropDownList(ItemColors::getColorRange(),['value' => $model->getColorSector(1)->color_id])->label('Sector ' . $i);
        echo $form->field($model, 'colorSectors[description_ru][' . ($i - 1) . ']')->textarea(['class' => 'form-control required result-description', 'value' => $model->getColorSector($i)->description_ru])->label('Description ru');
        echo $form->field($model, 'colorSectors[description_en][' . ($i - 1) . ']')->textarea(['class' => 'form-control required result-description', 'value' => $model->getColorSector($i)->description_en])->label('Description en');
    } ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
