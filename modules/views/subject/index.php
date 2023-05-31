<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\models\AdminSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-index">

    <div class="d-flex justify-content-between">
        <h4><?= Html::encode($this->title) ?></h4>

        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php  echo $this->render('_subjects-list', ['dataProvider' => $dataProvider]); ?>

</div>
