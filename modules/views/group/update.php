<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\Group $model */
/** @var app\modules\models\Items[] $items */

$this->title = 'Update ' . ($model->pushed == 1 ? 'Group' : 'Draft') . ': ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="group-update">
    <?= Yii::$app->controller->renderPartial('_menu.php'); ?>

    <?php $form = ActiveForm::begin(); ?>
    <?= Yii::$app->controller->renderPartial('_form.php', [
        'regions' => $regions,
        'model' => $model,
        'items' => $items,
        'form' => $form,
        'step' => $step
    ]);
    $form::end(); ?>

</div>
