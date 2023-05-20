<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\ItemRule $model */

$this->title = 'Create Item Rule';
$this->params['breadcrumbs'][] = ['label' => 'Item Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-rule-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
