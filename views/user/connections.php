<?php
include('header.php');
use yii\helpers\Url;
?>

<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
    <div class="mb-3 mx-auto px-0">
        <div class="row mx-auto px-0" style="padding-top: 25px!important; padding-left: 30px">
            <h3>Connections</h3>
            <table id="connectionsTable" class="hover table-striped w-100">
                <thead>
                    <tr>
                        <td style="max-width: 40px" class="text-center">ID</td>
                        <td style="max-width: 45px">Photo</td>
                        <td style="max-width: 160px">Name/Nickname</td>
                        <td style="max-width: 120px">Subject Relation</td>
                        <td style="max-width: 40px" class="text-center">ID</td>
                        <td style="max-width: 45px">Photo</td>
                        <td style="max-width: 160px">Name/Nickname</td>
                        <td style="max-width: 120px">Object Relation</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php') ?>