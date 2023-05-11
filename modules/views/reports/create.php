<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\Group $model */
/** @var app\modules\models\Items[] $items */

$this->title = 'Create Report';
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-create">
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
