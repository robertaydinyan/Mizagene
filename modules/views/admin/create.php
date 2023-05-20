<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\Admin $model */

$this->title = 'Create Admin';
$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
