<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\Language $model */

$this->title = 'Create Language';
$this->params['breadcrumbs'][] = ['label' => 'Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="language-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
