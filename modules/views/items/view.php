<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\models\Items $model */
/** @var app\modules\models\Language[] $languages */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="items-view">

    <h4><?= Html::encode($this->title) ?></h4>

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
    <?php
    $custom_columns = array();
    if ($languages) {
        foreach ($languages as $language) {
            $custom_columns[] = [
                'label' => 'Title ' . $language->language,
                'value' => function ($model) use ($language) {
                    return $model->getTitle($language->id)->title;
                }
            ];
            $custom_columns[] = [
                'label' => 'Description ' . $language->language,
                'value' => function ($model) use ($language) {
                    return $model->getTitle($language->id)->description;
                }
            ];
        }
    } ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'e2e_item_id',
            'item_id',
            'i_type',
            ...$custom_columns,
            'i_usg_type',
            'i_comb_type_id',
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
