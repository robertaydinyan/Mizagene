<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\Items $model */
/** @var app\modules\models\Language[] $languages */

$this->title = 'Update Items: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="items-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
