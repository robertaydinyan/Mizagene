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
    <div class="d-flex justify-content-between mt-1">
        <h1><?= Html::encode($this->title) ?></h1>

        <ul class="nav">
            <li class="nav-item">
                <?= Html::a('Drafts', [""], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "index" ? 'btn-dark-blue' : '')]) ?>
            </li>
            <li class="nav-item">
                <?= Html::a('Groups', [""], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "aaa" ? 'btn-dark-blue' : '')]) ?>
            </li>
            <li class="nav-item">
                <?= Html::a('<i class="fa fa-plus"></i> Create Group', [""], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "create" ? 'btn-dark-blue' : '')]) ?>
            </li>
        </ul>
    </div>
    <?php $form = ActiveForm::begin(); ?>
    <?= Yii::$app->controller->renderPartial('_form.php', [
        'regions' => $regions,
        'model' => $model,
        'items' => $items,
        'form' => $form
    ]);
    $form::end(); ?>

</div>
