<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\ItemRule $model */

$this->title = 'Update Item Rule: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Item Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-rule-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
