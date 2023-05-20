<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\UsgType $model */

$this->title = 'Update Usg Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Usg Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usg-type-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
