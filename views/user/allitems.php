<?php include('header.php');
use app\modules\models\Items;

?>
<div class="row d-flex justify-content-center">


<?php
$result = $subject->result;
foreach (json_decode($result['result']) as $k => $res):
    $item = Items::find()->where(['item_id' => $res->item_ID])->one();

    if ($item): ?>
        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12 d-md-block mx-auto px-3 my-3">
            <div class="parameterItem opinionContainer" data-res="<?= $res->subject_item_result ?>" style="background: white">
                <div class="" style="border: 1px solid #d2d2d2; border-radius: 5px; height: 330px">
                    <div class="allitems desktopResult d-flex justify-content-center" style="height: 230px; width: 100%; position:relative; margin-bottom: -35px;" data-result="<?= $res->subject_item_result ?>"></div>
                    <div class="px-2 pt-0 pb-4 text-center dots" style="margin-top: -90px"><?= $item->getTitle(1)->title_temp ?></div>
                    <p><?= floor($res->subject_item_result) ?></p>
                    <p style="padding-left: 10px; padding-right: 10px; overflow-y: scroll; height: 100px; z-index: 8; position: relative" >
                        <i><?= $item->getDescription(1)->description_temp ?></i>
                    </p>
                </div>
            </div>
        </div>
    <?php endif; endforeach; ?>

</div>

<?php include('footer.php'); ?>
