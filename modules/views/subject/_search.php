<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\models\ItemsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="subject-search d-flex col-6 justify-content-between">
    <div class="col-9 field-subjectsearch-search">
        <label class="control-label" for="subjectsearch-search">Search</label>
        <input type="text" id="subjectsearch-search" class="form-control" name="SubjectSearch[search]" value="">

        <div class="help-block"></div>
    </div>
    <div class="col-2 field-subjectsearch-gender">
        <label class="control-label" for="subjectsearch-gender">Gender</label>
        <select class="form-control" name="SubjectSearch[gender]">
            <option value="" selected disabled></option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="3">Other (born as a male)</option>
            <option value="4">Other (born as a female)</option>
        </select>

        <div class="help-block"></div>
    </div>
</div>
