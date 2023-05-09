<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\Group $model */
/** @var app\modules\models\Items[] $items */

$this->title = 'Create Group';
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-create">
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
