<?php
include('header.php');
use yii\helpers\Url;
?>
    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
        <div class="mb-3 mx-auto px-0">
            <div class="row mx-auto px-0" style="padding-top: 25px!important; padding-left: 30px">
                <h3>Settings</h3>
                <div class="col-xl-3 col-lg-4 col-md-10 col-sm-12 col-12">
                    <form action="/user/updateProfile" method="post">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?= Yii::$app->user->identity->email ?>">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingName" placeholder="Name/Nickname" value="<?= Yii::$app->user->identity->username ?>">
                            <label for="floatingPassword">Name/Nickname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="New Password">
                            <label for="floatingPassword">New Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm New Password">
                            <label for="floatingPasswordConfirm">Confirm New Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <button type="submit" class="btn fillButton w-100 mx-0">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php') ?>