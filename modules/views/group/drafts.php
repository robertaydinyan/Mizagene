<?php

use app\modules\models\Group;
use app\modules\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\models\GroupSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Groups';
$this->params['breadcrumbs'][] = $this->title;
$usg_types = Items::getIUsgTypes();
$comb_types = Items::getICombTypes();
?>
<div class="group-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="group-container d-flex">
        <?php echo $this->renderFile('@app/modules/views/group/_group-config.php'); ?>

        <div class="col-9 group-content">
            <ul class="nav">
                <li class="nav-item">
                    <?= Html::a('Drafts', [""], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "index" ? 'btn-dark-blue' : '')]) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Groups', [""], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "aaa" ? 'btn-dark-blue' : '')]) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('<i class="fa fa-plus"></i> Create Group', ["create"], ['class' => 'nav-link btn ' . (Yii::$app->controller->action->id == "create" ? 'btn-dark' : '')]) ?>
                </li>
            </ul>
        </div>
    </div>
</div>
