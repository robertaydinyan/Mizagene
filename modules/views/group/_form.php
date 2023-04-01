<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\models\Group $model */
/** @var yii\widgets\ActiveForm $form */
/** @var app\modules\models\Items[] $items */
?>

<div class="group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <div class="d-flex">
        <div class="items-container col-10 border">
            <?php
                $model_items = $model->getItems();
                if ($model->items) {
                    foreach (json_decode($model->items) as $i => $item) {
                        echo sprintf('<div class="col-12 border item">
                                                <input type="hidden" name="item[]" value="%s">
                                                <span>%s</span>
                                            </div>', $item, $model_items[$i]);
                    }
                }
            ?>
        </div>

        <div class="col-2">
            <select class="col-12 select2 items-list">
                <option value=""></option>
                <?php if ($items) {
                    foreach ($items as $item) {
                        if (!$model->items || !in_array($item->id, json_decode($model->items))) {
                            echo sprintf('<option value="%s">%s</option>', $item->id, $item->e2e_item_en);
                        }
                    }
                } ?>
            </select>
            <div class="col-12 border item item-template">
                <input type="hidden" name="item[]" disabled>
                <span>1</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
