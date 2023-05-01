<?php
    include('header.php');
    use yii\helpers\Url;
?>

<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
    <div class="mb-3 mx-auto px-0">
        <div class="row mx-auto px-0" style="padding-top: 25px!important; padding-left: 30px">
            <h3>Subjects List</h3>
            <table id="subjectsTable" class="hover table-striped w-100">
                <thead>
                <tr>
                    <td style="max-width: 40px" class="text-center">ID</td>
                    <td style="max-width: 45px">Photo</td>
                    <td style="max-width: 160px">Name/Nickname</td>
                    <td style="max-width: 120px">Date & Time</td>
                    <td style="max-width: 30px">Age</td>
                    <td style="max-width: 55px">Gender</td>
                    <td style="max-width: 50px">Height</td>
                    <td style="max-width: 70px">Wrist size</td>
                    <td style="max-width: 95px">Connections</td>
                    <td style="max-width: 40px">Views</td>
                    <td style="max-width: 60px">Answers</td>
                    <td style="max-width: 80px">Actions</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
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
                        <img src="/images/wrong.png" alt="" width="15px">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">99999</td>
                    <td class="text-center"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                    <td>Aram10+</td>
                    <td>30.04.2023</td>
                    <td>100</td>
                    <td>Male</td>
                    <td>180</td>
                    <td>40</td>
                    <td>14+</td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <img src="/images/yes_no.png" alt="" width="25px">
                        <img src="/images/share.png" alt="" width="20px" class="mx-3">
                        <img src="/images/wrong.png" alt="" width="15px">
                    </td>
                </tr><tr>
                    <td class="text-center">99999</td>
                    <td class="text-center"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                    <td>Aram</td>
                    <td>30.04.2023</td>
                    <td>100</td>
                    <td>Male</td>
                    <td>180</td>
                    <td>40</td>
                    <td>14+</td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <img src="/images/yes_no.png" alt="" width="25px">
                        <img src="/images/share.png" alt="" width="20px" class="mx-3">
                        <img src="/images/wrong.png" alt="" width="15px">
                    </td>
                </tr><tr>
                    <td class="text-center">99999</td>
                    <td class="text-center"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                    <td>Aram</td>
                    <td>30.04.2023</td>
                    <td>100</td>
                    <td>Male</td>
                    <td>180</td>
                    <td>40</td>
                    <td>14+</td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <img src="/images/yes_no.png" alt="" width="25px">
                        <img src="/images/share.png" alt="" width="20px" class="mx-3">
                        <img src="/images/wrong.png" alt="" width="15px">
                    </td>
                </tr><tr>
                    <td class="text-center">99999</td>
                    <td class="text-center"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                    <td>Aram</td>
                    <td>30.04.2023</td>
                    <td>100</td>
                    <td>Male</td>
                    <td>180</td>
                    <td>40</td>
                    <td>14+</td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <img src="/images/yes_no.png" alt="" width="25px">
                        <img src="/images/share.png" alt="" width="20px" class="mx-3">
                        <img src="/images/wrong.png" alt="" width="15px">
                    </td>
                </tr><tr>
                    <td class="text-center">99999</td>
                    <td class="text-center"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                    <td>Aram</td>
                    <td>30.04.2023</td>
                    <td>100</td>
                    <td>Male</td>
                    <td>180</td>
                    <td>40</td>
                    <td>14+</td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <img src="/images/yes_no.png" alt="" width="25px">
                        <img src="/images/share.png" alt="" width="20px" class="mx-3">
                        <img src="/images/wrong.png" alt="" width="15px">
                    </td>
                </tr><tr>
                    <td class="text-center">99999</td>
                    <td class="text-center"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                    <td>Aram</td>
                    <td>30.04.2023</td>
                    <td>100</td>
                    <td>Male</td>
                    <td>180</td>
                    <td>40</td>
                    <td>14+</td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <img src="/images/yes_no.png" alt="" width="25px">
                        <img src="/images/share.png" alt="" width="20px" class="mx-3">
                        <img src="/images/wrong.png" alt="" width="15px">
                    </td>
                </tr><tr>
                    <td class="text-center">99999</td>
                    <td class="text-center"><img src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></td>
                    <td>Aram</td>
                    <td>30.04.2023</td>
                    <td>100</td>
                    <td>Male</td>
                    <td>180</td>
                    <td>40</td>
                    <td>14+</td>
                    <td>0</td>
                    <td>0</td>
                    <td>
                        <img src="/images/yes_no.png" alt="" width="25px">
                        <img src="/images/share.png" alt="" width="20px" class="mx-3">
                        <img src="/images/wrong.png" alt="" width="15px">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2" style="background: rgba(46,46,46,0.1); height: 400px; align-self: center; width: 248px;">
    <div class="p-3">
        <div class="d-flex justify-content-center">
            <input type="text" style="width: 160px">
            <button type="button" class="btn" style="border: 1px solid grey; padding: 3px 5px; margin-left: 1rem; background: white;"><img src="/images/sorting.png" alt="" width="20px"></button>
        </div>
        <div class="d-flex">
            <label for="color-black">
                <input type="radio" id="color-black" name="color" value="black" checked/>
                <span class="color-radio black"></span>
            </label>

            <label for="color-red">
                <input type="radio" id="color-red" name="color" value="red" />
                <span class="color-radio red"></span>
            </label>

            <label for="color-green">
                <input type="radio" id="color-green" name="color" value="green" />
                <span class="color-radio green"></span>
            </label>

            <label for="color-blue">
                <input type="radio" id="color-blue" name="color" value="blue" />
                <span class="color-radio blue"></span>
            </label>

        </div>
    </div>
</div>

<?php include('footer.php') ?>
