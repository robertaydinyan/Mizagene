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

    <h4><?= Html::encode($this->title) ?></h4>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <form>
        <input type="hidden" name="id" value="<?php echo $subject->id; ?>">
        <input type="text" name="search" class="form-control" value="<?php echo $search; ?>">
    </form>
    <br>

    <table class="table table-striped table-bordered simple-grid">
        <thead>
            <tr>
                <th>item_id</th>
                <th>name</th>
                <th>description</th>
                <th>value</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($subject_result) {
            foreach (json_decode($subject_result['result']) as $i => $r) {
                $item = Items::findOne($r->item_ID);
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
                                </tr>
                            ',
                            $r->item_ID,
                            $item->getTitle(1)->title,
                            $item->getTitle(1)->description,
                            $r->subject_item_result
                        );
                    }
                }
            }
        } ?>
        </tbody>
    </table>

</div>
