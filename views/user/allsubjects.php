<?php
include('header.php');
use yii\helpers\Url;
?>

<div class="row d-flex mx-auto px-0">
    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 px-0 px-sm-2">
        <div class="mb-3 mx-auto px-0">
            <div class="row mx-auto px-0" style="padding-top: 25px!important; padding-left: 30px">
                <h3>Subjects List</h3>
                <table id="subjectsTable" class="hover table-striped w-100">
                    <thead>
                    <tr>
                        <td class="text-center" style="max-width: 40px" class="text-center">ID</td>
                        <td class="text-center" style="max-width: 45px">Photo</td>
                        <td class="text-center" style="max-width: 160px">Name/Nickname</td>
                        <td class="text-center" style="max-width: 120px">Date & Time</td>
                        <td class="text-center" style="max-width: 30px">Age</td>
                        <td class="text-center" style="max-width: 55px">Gender</td>
                        <td class="text-center" style="max-width: 50px">Height</td>
                        <td class="text-center" style="max-width: 70px">Wrist size</td>
                        <td class="text-center" style="max-width: 95px">Connections</td>
                        <td class="text-center" style="max-width: 40px">Views</td>
                        <td class="text-center" style="max-width: 60px">Answers</td>
                        <td class="text-center" style="max-width: 90px">Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-start ps-2">1</td>
                        <td class="text-start"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td>Aram</td>
                        <td>30.04.2023 12:15</td>
                        <td>100</td>
                        <td>Male</td>
                        <td>180</td>
                        <td>40</td>
                        <td><img src="/images/aram.jpg" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> 10+</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <img src="/images/yes_no.png" alt="" width="25px">
                            <img src="/images/share.png" alt="" width="20px" class="mx-3">
                            <img src="/images/wrong.png" alt="" width="15px" class="me-2">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start ps-2">1</td>
                        <td class="text-start"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td>Aram</td>
                        <td>30.04.2023 12:15</td>
                        <td>100</td>
                        <td><i class="fa-solid fa-mars" style="color: #000000;"></i></td>
                        <td>180</td>
                        <td>40</td>
                        <td><img src="/images/aram.jpg" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> 10+</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <img src="/images/yes_no.png" alt="" width="25px" class="mx-sm-0 mx-3">
                            <img src="/images/share.png" alt="" width="20px" class="mx-3">
                            <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 mx-3">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start ps-2">1</td>
                        <td class="text-start"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td>Aram</td>
                        <td>30.04.2023 12:15</td>
                        <td>100</td>
                        <td>Male</td>
                        <td>180</td>
                        <td>40</td>
                        <td><img src="/images/aram.jpg" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> 10+</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <img src="/images/yes_no.png" alt="" width="25px" class="mx-sm-0 mx-3">
                            <img src="/images/share.png" alt="" width="20px" class="mx-3">
                            <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 mx-3">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start ps-2">1</td>
                        <td class="text-start"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td>Aram</td>
                        <td>30.04.2023 12:15</td>
                        <td>100</td>
                        <td>Male <i class="fa-solid fa-transgender" style="color: #000000;"></i></td>
                        <td>180</td>
                        <td>40</td>
                        <td><img src="/images/aram.jpg" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> 10+</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <img src="/images/yes_no.png" alt="" width="25px" class="mx-sm-0 mx-3">
                            <img src="/images/share.png" alt="" width="20px" class="mx-3">
                            <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 mx-3">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start ps-2">1</td>
                        <td class="text-start"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td>Aram</td>
                        <td>30.04.2023 12:15</td>
                        <td>100</td>
                        <td>Female <i class="fa-solid fa-transgender" style="color: #000000;"></i></td>
                        <td>180</td>
                        <td>40</td>
                        <td><img src="/images/aram.jpg" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> 10+</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <img src="/images/yes_no.png" alt="" width="25px" class="mx-sm-0 mx-3">
                            <img src="/images/share.png" alt="" width="20px" class="mx-3">
                            <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 mx-3">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start ps-2">1</td>
                        <td class="text-start"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td>Aram</td>
                        <td>30.04.2023 12:15</td>
                        <td>100</td>
                        <td><i class="fa-solid fa-venus" style="color: #000000;"></i></td>
                        <td>180</td>
                        <td>40</td>
                        <td><img src="/images/aram.jpg" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> 10+</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <img src="/images/yes_no.png" alt="" width="25px" class="mx-sm-0 mx-3">
                            <img src="/images/share.png" alt="" width="20px" class="mx-3">
                            <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 mx-3">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start ps-2">1</td>
                        <td class="text-start"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td>Aram</td>
                        <td>30.04.2023 12:15</td>
                        <td>100</td>
                        <td>Male</td>
                        <td>180</td>
                        <td>40</td>
                        <td><img src="/images/aram.jpg" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> 10+</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <img src="/images/yes_no.png" alt="" width="25px" class="mx-sm-0 mx-3">
                            <img src="/images/share.png" alt="" width="20px" class="mx-3">
                            <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 mx-3">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start ps-2">1</td>
                        <td class="text-start"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td>Aram</td>
                        <td>30.04.2023 12:15</td>
                        <td>100</td>
                        <td>Male</td>
                        <td>180</td>
                        <td>40</td>
                        <td><img src="/images/aram.jpg" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> 10+</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <img src="/images/yes_no.png" alt="" width="25px" class="mx-sm-0 mx-3">
                            <img src="/images/share.png" alt="" width="20px" class="mx-3">
                            <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 mx-3">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start ps-2">1</td>
                        <td class="text-start"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td>Aram</td>
                        <td>30.04.2023 12:15</td>
                        <td>100</td>
                        <td>Male</td>
                        <td>180</td>
                        <td>40</td>
                        <td><img src="/images/aram.jpg" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> 10+</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <img src="/images/yes_no.png" alt="" width="25px" class="mx-sm-0 mx-3">
                            <img src="/images/share.png" alt="" width="20px" class="mx-3">
                            <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 mx-3">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start ps-2">1</td>
                        <td class="text-start"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                        <td>Aram</td>
                        <td>30.04.2023 12:15</td>
                        <td>100</td>
                        <td>Male</td>
                        <td>180</td>
                        <td>40</td>
                        <td><img src="/images/aram.jpg" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> 10+</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <img src="/images/yes_no.png" alt="" width="25px" class="mx-sm-0 mx-3">
                            <img src="/images/share.png" alt="" width="20px" class="mx-3">
                            <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 mx-3">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-12" style="background: rgb(248,249,250); border-radius: 3px; height: 400px; margin-top: 3.8%">
        <p class="text-center mt-2 pb-0 mb-0">Quick Parameter Search</p>
        <div class="p-3">
            <div class="d-flex">
                <input type="text" style="width: 100%; border: 1px solid #dee2e6; border-radius: 5px">
                <button type="button" class="btn" style="padding: 0; margin: 0; margin-left: 36px!important;"><img src="/images/filter.png" alt="" width="30px"></button>
            </div>
            <!--            <div class="d-flex">-->
            <!--                <label for="color-black">-->
            <!--                    <input type="radio" id="color-black" name="color" value="black" checked/>-->
            <!--                    <span class="color-radio black"></span>-->
            <!--                </label>-->
            <!---->
            <!--                <label for="color-red">-->
            <!--                    <input type="radio" id="color-red" name="color" value="red" />-->
            <!--                    <span class="color-radio red"></span>-->
            <!--                </label>-->
            <!---->
            <!--                <label for="color-green">-->
            <!--                    <input type="radio" id="color-green" name="color" value="green" />-->
            <!--                    <span class="color-radio green"></span>-->
            <!--                </label>-->
            <!---->
            <!--                <label for="color-blue">-->
            <!--                    <input type="radio" id="color-blue" name="color" value="blue" />-->
            <!--                    <span class="color-radio blue"></span>-->
            <!--                </label>-->
            <!---->
            <!--            </div>-->
            <div class="d-flex flex-column mt-3">
                <div class="d-flex align-items-center justify-content-start">
                    <img class="me-2" src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;">
                    <span class="mx-2">Aram</span>
                    <div class="d-flex ms-auto align-items-center">
                        <div class="mx-2" style="width: 10px; height: 10px; background: black; border-radius: 3px"></div>
                        <span class="">43.54%</span>
                    </div>

                </div>
                <hr style="margin: 0.5rem 0!important;">
                <div class="d-flex align-items-center justify-content-start">
                    <img class="me-2" src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;">
                    <span class="mx-2">Aram</span>
                    <div class="d-flex ms-auto align-items-center">
                        <div class="mx-2" style="width: 10px; height: 10px; background: black; border-radius: 3px"></div>
                        <span class="">43.54%</span>
                    </div>

                </div>
                <hr style="margin: 0.5rem 0!important;">
                <div class="d-flex align-items-center justify-content-start">
                    <img class="me-2" src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;">
                    <span class="mx-2">Aram</span>
                    <div class="d-flex ms-auto align-items-center">
                        <div class="mx-2" style="width: 10px; height: 10px; background: black; border-radius: 3px"></div>
                        <span class="">43.54%</span>
                    </div>

                </div>
                <hr style="margin: 0.5rem 0!important;">
                <div class="d-flex align-items-center justify-content-start">
                    <img class="me-2" src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;">
                    <span class="mx-2">Aram</span>
                    <div class="d-flex ms-auto align-items-center">
                        <div class="mx-2" style="width: 10px; height: 10px; background: black; border-radius: 3px"></div>
                        <span class="">43.54%</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
