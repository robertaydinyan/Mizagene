<?php
    include('header.php');
    use yii\helpers\Url;
?>

<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
    <div class="mb-3 mx-auto px-0">
        <div class="row mx-auto px-0" style="padding-top: 25px!important">
            <h3>Subjects List</h3>
            <table id="subjectsTable" class="hover table-striped w-100">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Photo</td>
                    <td>Name/Nickname</td>
                    <td>Date & Time</td>
                    <td>Age</td>
                    <td>Gender</td>
                    <td>Height</td>
                    <td>Wrist size</td>
                    <td>Connections</td>
                    <td>Views</td>
                    <td>Answers</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="/images/aram.jpg" alt="" width="50px"></td>
                    <td>Aram</td>
                    <td>30.04.2023</td>
                    <td>100+</td>
                    <td>Male</td>
                    <td>180</td>
                    <td>40</td>
                    <td>10+</td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <img src="/images/yes_no.png" alt="" width="30px">
                        <img src="/images/share.png" alt="" width="25px">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="/images/aram.jpg" alt="" width="50px"></td>
                    <td>Aram</td>
                    <td>30.04.2023</td>
                    <td>100+</td>
                    <td>Male</td>
                    <td>180</td>
                    <td>40</td>
                    <td>14+</td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <img src="/images/yes_no.png" alt="" width="30px">
                        <img src="/images/share.png" alt="" width="25px">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 filterBox">

</div>

<?php include('footer.php') ?>
