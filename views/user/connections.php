<?php
include('header.php');
use yii\helpers\Url;
use app\models\Subject;

$cons = [
    2 => 'Partner',
    3 => 'Spouse',
    4 => 'Child',
    6 => 'Biological father',
    7 => 'Biological mother',
];
?>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="mb-3 mx-auto px-0">
        <div class="row mx-auto px-0" style="padding-top: 25px!important; padding-left: 30px">
            <h3 class="d-flex align-items-center centeredTitle" style="color: #003C46"><img src="/images/connections_1.png" alt="" width="30" class="me-2">Connections</h3>
            <table id="connectionsTable" class="hover table-striped w-100">
                <thead>
                    <tr>
                        <td style="max-width: 40px">ID</td>
                        <td style="max-width: 45px">Photo</td>
                        <td style="max-width: 160px">Name/Nickname</td>
                        <td style="max-width: 120px">Subject Relation</td>
                        <td style="max-width: 40px">ID</td>
                        <td style="max-width: 45px">Photo</td>
                        <td style="max-width: 160px">Name/Nickname</td>
                        <td style="max-width: 120px">Object Relation</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data as $row):
                            foreach ($row->connections as $con): $obj = Subject::findOne($con->object_id); ?>
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><img src="<?= str_replace('/var/www/html/Mizagene/web/', '', $row->image) ?>" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td><?= $row->name ?></td>
                        <td><?= $cons[$con->subject_type] ?></td>
                        <td><?= $obj->id ?></td>
                        <td><img src="<?= str_replace('/var/www/html/Mizagene/web/', '', $obj->image) ?>" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td><?= $obj->name ?></td>
                        <td><?= $cons[$con->object_type] ?></td>
                    </tr>
                    <?php endforeach; endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php') ?>