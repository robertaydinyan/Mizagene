<?php

use app\modules\models\Admin;
use app\modules\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Subject;

/** @var yii\web\View $this */
/** @var app\modules\models\AdminSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Subject ' . $subject->name;
$this->params['breadcrumbs'][] = $this->title;
$subject_result = $subject->result;
?>
<div class="admin-index">
    <div class="d-flex justify-content-between p-2">
        <h4><?= Html::encode($this->title) ?></h4>

        <form class="col-3">
            <input type="hidden" name="id" value="<?php echo $subject->id; ?>">
            <input type="text" name="search" class="form-control" value="<?php echo $search; ?>">
        </form>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <br>
    <div class="grid-view">
        <table class="table table-striped table-bordered simple-grid">
            <thead>
                <tr>
                    <th>
                        <div>
                            <span>item_id</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>e2e_id</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>name ru</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>description ru</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>name en</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>description en</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>value</span>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php if ($subject_result) {
                foreach (json_decode($subject_result['result']) as $i => $r) {
                    $item = Items::find()->where(['item_id' => $r->item_ID])->one();
                    if ($item) {
                        $title = $item->getTitle(1)->title;
                        $description = $item->getTitle(1)->description;
                        if (!$search || ($title && strpos($title, $search) !== false) || ($description && strpos($description, $search) !== false) || strpos($r->item_ID, $search) !== false) {
                            echo sprintf('
                                    <tr>
                                        <td>%s</td>
                                        <td>%s</td>
                                        <td>%s</td>
                                        <td>%s</td>
                                        <td>%s</td>
                                        <td>%s</td>
                                        <td>%s</td>
                                    </tr>
                                ',
                                $r->item_ID,
                                $item->id,
                                $item->getTitle(1)->title,
                                $item->getTitle(1)->description,
                                $item->getTitle(2)->title,
                                $item->getTitle(2)->description,
                                round($r->subject_item_result, 2)
                            );
                        }
                    }
                }
            } ?>
            </tbody>
        </table>
    </div>
</div>
