<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\Group $model */
/** @var app\modules\models\Items[] $items */

$this->title = 'Create Parameter influence';
$this->params['breadcrumbs'][] = ['label' => 'Parameter influence', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parameter-influence-create">
    <?= Yii::$app->controller->renderPartial('_menu.php'); ?>

    <?php $form = ActiveForm::begin(); ?>
    <?= Yii::$app->controller->renderPartial('_form.php', [
        'model' => $model,
        'influenceItems' => $influenceItems,
        'usg_types' => $usg_types,
        'comb_types' => $comb_types,
        'step' => $step,
        'form' => $form,
        'mode' => 1,
        'subjects' => $subjects
    ]);
    $form::end(); ?>

</div>
