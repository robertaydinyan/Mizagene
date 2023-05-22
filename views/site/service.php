<?php include('header.php')?>

<div class="container-fluid firstContainer" style="min-height: 450px">
    <div id="particles-js" style="min-height: 450px"></div>
    <div class="container row d-flex mx-auto px-0" style="padding-top: 155px">
        <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: #003C46"><?= $data['О Сервисе Youmee'][$lang] ?></span></h1>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                    <b style="font-weight: 500; color: #003C46">Youmee Technologies</b><?= $data['service_card1'][$lang] ?><br><br>
                    <b style="font-weight: 500; color: #003C46"><?= $data['command'][$lang] ?></b> <?= $data['service_card2'][$lang] ?>
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
                <img src="/images/logo.png" alt=""width="70%">
            </div>
        </div>

    </div>
</div>



<div class="container-fluid firstContainer serviceParticles mb-3" style="min-height: 400px">
    <div id="particles-js-team" style="height: 400px"></div>
    <div class="container mt-3">
        <div class="container row d-flex mx-auto px-0" style="margin: 0 auto!important; padding: 0!important; position: absolute; top: 0;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46"><?= $data['founders'][$lang] ?></h1>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5" style="text-align: start">
                <div class="d-flex">
                    <img src="/images/Aram.png" alt="" width="200px">
                    <div style="align-self: center;">
                        <h6 class="mb-0">Aram</h6>
                        <p>SARKISYAN</p>
                        <span style="display: block; color: rgb(210, 58, 225)">Managing partner</span>
                        <span>CEO, PO</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5" style="text-align: start">
                <div class="d-flex">
                    <img src="/images/Armen.png" alt="" width="200px">
                    <div style="align-self: center;">
                        <h6 class="mb-0">Armen</h6>
                        <p>GABRIELYAN</p>
                        <span style="display: block; color: rgb(210, 58, 225)">Partner</span>
                        <span>BDO</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5" style="text-align: start">
                <div class="d-flex">
                    <img src="/images/Rushandel.png" alt="" width="200px">
                    <div style="align-self: center;">
                        <h6 class="mb-0">Hamid Reza</h6>
                        <p>SHEIKH ROSHANDEL</p>
                        <span style="display: block; color: rgb(210, 58, 225)">Partner</span>
                        <span>Author of Technology</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="container row mx-auto px-0">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['goals'][$lang] ?></h1>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px!important; background-color: rgba(234, 51, 61, 0.2); border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46"><?= $data['s_tile1'][$lang] ?></span><br>
                <?= $data['s_tile1_2'][$lang] ?>  <span style="font-weight: 400; color: #003C46"><?= $data['s_tile1_3'][$lang] ?></span><?= $data['s_tile1_4'][$lang] ?> </p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start;padding-left: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46"><?= $data['s_tile2'][$lang] ?></span><br>
                <?= $data['s_tile2_2'][$lang] ?> <span style="font-weight: 400; color: #003C46"><?= $data['s_tile2_3'][$lang] ?></span> <?= $data['s_tile2_4'][$lang] ?></p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46"><?= $data['s_tile3'][$lang] ?></span><br>
                <?= $data['s_tile3_2'][$lang] ?> <span style="font-weight: 400; color: #003C46"><?= $data['s_tile3_3'][$lang] ?></span></p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-left: 30px!important; background-color: rgba(75, 173, 233, 0.2); border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46"><?= $data['s_tile4'][$lang] ?></span><br>
                <?= $data['s_tile4_2'][$lang] ?>  <span style="font-weight: 400; color: #003C46"><?= $data['s_tile4_3'][$lang] ?></span><?= $data['s_tile4_4'][$lang] ?></p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px!important; background-color: rgba(210, 58, 225, 0.2); border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46"><?= $data['s_tile5'][$lang] ?></span><br>
                <?= $data['s_tile5_2'][$lang] ?></p>
            <p style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 400; color: #003C46"><?= $data['s_tile5_3'][$lang] ?></span></p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['s_tile5_4'][$lang] ?><span style="font-weight: 400; color: #003C46"><?= $data['s_tile5_5'][$lang] ?></span><?= $data['s_tile5_6'][$lang] ?> </p>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-left: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46"><?= $data['s_tile6'][$lang] ?></span><br><?= $data['s_tile6_2'][$lang] ?>
                <span style="font-weight: 400; color: #003C46"><?= $data['s_tile6_3'][$lang] ?> </span><?= $data['s_tile6_4'][$lang] ?> </p><br>

            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46"><?= $data['s_tile7'][$lang] ?> </span><br>
                <?= $data['s_tile7_2'][$lang] ?></p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"> <span style="font-weight: 400; color: #003C46"><?= $data['s_tile7_3'][$lang] ?></span></p>

        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="container row mx-auto px-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['secure-tile'][$lang] ?> </h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px">
                    <h3 style="color: #003C46"><?= $data['secure-tile1'][$lang] ?> </h3>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['secure-tile2'][$lang] ?></p>

                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-left: 30px">
                    <h3 style="color: #003C46"><?= $data['os-tile'][$lang] ?></h3>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['os-tile1'][$lang] ?> </p>
                    <p class="mb-0" style="font-size: 19px;color: rgb(114, 114, 114);"> 1.  <span style="font-weight: 400; color: #003C46">API</span>.<?= $data['os-tile2'][$lang] ?> </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">2.  <span style="font-weight: 400; color: #003C46"><?= $data['os-tile3'][$lang] ?> </span>, <?= $data['os-tile4'][$lang] ?> </p>

                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <img src="/images/picture_total.png" alt="" style="width: 100%">
            </div>
            <p style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['os-tile5'][$lang] ?></p>
        </div>
    </div>
</div>

<div class="container-fluid firstContainer mb-sm-3" style="min-height: 150px">
    <div id="particles-js-footer" style="height: 150px"></div>
    <div class="container mx-auto px-0">
        <div class="container d-grid gap-2 d-md-block col-12 mx-auto text-center" style="margin: 0!important; margin-top: 2rem!important; padding: 0!important; z-index: 10; position: absolute; top: 20px">
            <button class="btn fillButton mx-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][$lang] ?></button>
            <button class="btn outlineButton"><?= $data['button2'][$lang] ?></button>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
