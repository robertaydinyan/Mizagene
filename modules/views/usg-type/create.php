<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\UsgType $model */

$this->title = 'Create Usg Type';
$this->params['breadcrumbs'][] = ['label' => 'Usg Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usg-type-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
