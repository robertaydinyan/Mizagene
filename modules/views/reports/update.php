<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\Reports $model */

$this->title = 'Update Reports: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reports-update">

    <?= Yii::$app->controller->renderPartial('_menu.php'); ?>

    <?php $form = ActiveForm::begin(); ?>
    <?= Yii::$app->controller->renderPartial('_form.php', [
        'model' => $model,
        'form' => $form,
        'step' => $step,
        'group_variants' => $group_variants,
        'regions' => $regions
    ]);
    $form::end(); ?>

</div>
