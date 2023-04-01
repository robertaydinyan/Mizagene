<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\models\Items $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'e2e_item_id',
            'item_id',
            'i_type',
            'i_usg_type',
            'i_comb_type_id',
            'e2e_item_ru',
            'e2e_i_description_ru',
            'e2e_item_en',
            'e2e_i_description_en',
            'e2e_item_ir',
            'e2e_i_description_ir',
            'i_result_sector1_colorid',
            'i_result_sector2_colorid',
            'i_result_sector3_colorid',
            'i_result_sector4_colorid',
            'i_result_sector5_colorid',
            'i_result_sector6_colorid',
            'i_result_sector7_colorid',
            'i_result_sector8_colorid',
            'i_result_sector9_colorid',
            'i_result_sector10_colorid',
        ],
    ]) ?>

</div>
