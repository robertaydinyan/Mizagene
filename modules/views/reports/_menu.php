<?php

use yii\bootstrap5\Html;

?>

<div class="d-flex justify-content-between mt-1">
    <h1><?= Html::encode($this->title) ?></h1>

    <ul class="nav">
        <li class="nav-item">
            <?= Html::a('Reports', ["index"], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "index" ? 'btn-dark-blue' : '')]) ?>
        </li>
        <li class="nav-item">
            <?= Html::a('<i class="fa fa-plus"></i> Create Report', ["create"], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "create" ? 'btn-dark-blue' : '')]) ?>
        </li>
    </ul>
</div>