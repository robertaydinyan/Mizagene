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
    <div class="row">
        <div class="col-2">
            <?= $form->field($model, 'i_type')->dropDownList(Items::getITypes(), ['multiple' => 'multiple', 'class' => 'required form-control item-type select2']); ?>
            <?= $form->field($model, 'i_usg_type')->dropDownList(
                \yii\helpers\ArrayHelper::map(\app\modules\models\UsgType::find()->asArray()->all(), 'id', 'name'),
                ['multiple' => 'multiple', 'class' => 'required form-control item-usage-type select2', 'value' => $model->i_usg_type]
            ); ?>
            <?= $form->field($model, 'i_comb_type_id')->dropDownList(Items::getICombTypes(), ['multiple' => 'multiple', 'class' => 'item-comb-type select2']); ?>

            <div class="row">
                <?php echo sprintf('<div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                   <div class="color-spector color-spector-change color-for-%s">%s</div>
                </div>',


                    $model->getColorSector(1)->color_id,
                    $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(1)->color_id])->label(false),
                    $model->getColorSector(2)->color_id,
                    $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(2)->color_id])->label(false),
                    $model->getColorSector(3)->color_id,
                    $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(3)->color_id])->label(false),
                    $model->getColorSector(4)->color_id,
                    $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(4)->color_id])->label(false),
                    $model->getColorSector(5)->color_id,
                    $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(5)->color_id])->label(false),
                    $model->getColorSector(6)->color_id,
                    $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(6)->color_id])->label(false),
                    $model->getColorSector(7)->color_id,
                    $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(7)->color_id])->label(false),
                    $model->getColorSector(8)->color_id,
                    $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(8)->color_id])->label(false),
                    $model->getColorSector(9)->color_id,
                    $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(9)->color_id])->label(false),
                    $model->getColorSector(10)->color_id,
                    $form->field($model, 'colorSectors[color_id][]')->hiddenInput(['class' => 'required', 'value' => $model->getColorSector(10)->color_id])->label(false)

                );
                ?>
            </div>
        </div>
        <div class="col-10 row">
            <?= $form->field($model, 'title[1]', ['options' => ['class' => 'col-6']])->textarea([
                'maxlength' => true,
                'value' => $model->getTitle(1)->title,
                'class' => 'form-control required'
            ])->label('title ru') ?>
            <?= $form->field($model, 'description[1]', ['options' => ['class' => 'col-6']])->textarea([
                'maxlength' => true,
                'value' => $model->getTitle(1)->description,
                'class' => 'form-control required'
            ])->label('description ru') ?>

            <?= $form->field($model, 'title[2]', ['options' => ['class' => 'col-6']])->textarea([
                'maxlength' => true,
                'value' => $model->getTitle(2)->title,
                'class' => 'form-control required'
            ])->label('title en') ?>
            <?= $form->field($model, 'description[2]', ['options' => ['class' => 'col-6']])->textarea([
                'maxlength' => true,
                'value' => $model->getTitle(2)->description,
                'class' => 'form-control required'
            ])->label('description en') ?>
        </div>
    </div>

    <div class="row">
        <?php for($i = 0; $i < 10; $i++) {
            echo sprintf('<div class="col-6 d-flex justify-content-between">
                    <span>%s</span>
                    %s
                    %s 
                </div>',
                10 * $i + 1 . '-' . 10 * ($i + 1),
                $form->field($model, 'colorSectors[description_ru][' . $i . ']', ['options' => ['class' => 'col-5']])->textarea(['class' => 'form-control required result-description', 'value' => $model->getColorSector($i + 1)->description_ru])->label('Description ru'),
                $form->field($model, 'colorSectors[description_en][' . $i . ']', ['options' => ['class' => 'col-5']])->textarea(['class' => 'form-control required result-description', 'value' => $model->getColorSector($i + 1)->description_en])->label('Description en')
            );
        } ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<style>
    label {
        font-weight: bold;
    }
</style>