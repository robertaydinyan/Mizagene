<?php

use yii\bootstrap5\Html;

?>

<div class="d-flex justify-content-between mt-1">
    <h4><?= Html::encode($this->title) ?></h4>

    <ul class="nav">
        <li class="nav-item">
            <?= Html::a('Drafts', ["drafts"], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "drafts" ? 'btn-dark-blue' : '')]) ?>
        </li>
        <li class="nav-item">
            <?= Html::a('Influences', ["index"], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "index" ? 'btn-dark-blue' : '')]) ?>
        </li>
        <li class="nav-item">
            <?= Html::a('<i class="fa fa-plus"></i> Create', ["create"], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "create" ? 'btn-dark-blue' : '')]) ?>
        </li>
    </ul>
</div>