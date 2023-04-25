<?php include('header.php') ?>


<div class="container-fluid firstContainer">
    <div id="particles-js"></div>
    <img src="images/collage.jpg" class="testBack">
    <img src="images/chineese.png" class="backImage">
    <div class="container" style="padding-top: 21%">
        <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: #003C46;"><?= $data['title1_1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span><br><span style="color: #003C46;"><?= $data['title1_2'][isset($_GET['lang']) ? 'en' : 'ru'] ?> </span><br><span style="color: rgb(210, 58, 225);"> <?= $data['title1_3'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></h1>
        <div class="container d-grid gap-2 d-md-block col-12 mx-auto" style="margin: 0!important; margin-top: 4rem!important; padding: 0!important; z-index: 10; position: relative">
            <button class="btn fillButton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
            <button class="btn outlineButton"><?= $data['button2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
        <h1 style="color: #003C46"><?= $data['menu2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h1>
    </div>
    <div class="container row m-0 p-0">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-start mb-5 ps-0 pe-0">
            <img src="images/PC.png" alt="">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex flex-column mb-5 ps-0 pe-0">
            <p class="subtitle" style="color: #464646!important;">
                <span><?= $data['title2_1'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <a href="/site/about-technology" style="color: #003C46; font-weight: 400"><?= $data['технология Mizagene'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a> <?= $data['title2_1_1'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['title2_1_2'][isset($_GET['lang']) ? 'en' : 'ru'] ?> </span>
                <span class="" >
                            <span  style="" class="mt-3 d-block">
                                <img src="images/face_index.png" width="20px">
                                <!--                            <i class="fa-solid fa-circle fa-beat-fade fa-sm" style="color: #b233dc;margin-right: 15px"></i>-->
                                <?= $data['title2_1_3'][isset($_GET['lang']) ? 'en' : 'ru'] ?>
                            </span>
                            <span class="d-block" style="">
                                <img src="images/scale.png" width="20px">
                                <!--                            <i class="fa-solid fa-circle fa-beat-fade fa-sm" style="color: #b233dc;margin-right: 15px"></i>-->
                                <?= ' ' . $data['title2_1_4'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span>
                            <span style="" class="mb-3 d-block">
                                <img src="images/scale.png" width="20px">
                                <!--                            <i class="fa-solid fa-circle fa-beat-fade fa-sm" style="color: #b233dc;margin-right: 15px"></i>-->
                                <?= ' ' . $data['title2_1_5'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span>

                        </span>
                <span class="mb-3"><?= ' ' . $data['title2_1_6'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span>
                <?= $data['title2_1_7'][isset($_GET['lang']) ? 'en' : 'ru'] ?>
                <?= $data['title2_1_8'][isset($_GET['lang']) ? 'en' : 'ru'] ?><br><br>
            <div class="text-center">
                <button class="btn fillButton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
            </div>

            </p>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="container row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['menu3'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 " style="font-size: 19px;">
            <p class="m-0" style="font-size: 19px;color: rgb(114, 114, 114);"><a href="/site/serive" style="color: #003C46; font-weight: 400"><?= $data['Youmee Technologies'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a><?= $data[' –  эксклюзивный партнер Mizagene'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['Technologies и вендор программного обеспечения типов SAAS и'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['PAAS в  области разработки наукоемких AI решений на базе'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['запатентованной технологии Mizagene.'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
            <p class="m-0" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Наши технологические и программные решения помогают'][isset($_GET['lang']) ? 'en' : 'ru'] ?><?= $data['людям осознать свой потенциал, понять сильные и слабые'][isset($_GET['lang']) ? 'en' : 'ru'] ?><?= $data['стороны личности, а также найти  своевременное применение'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['врожденным талантам. Экономьте драгоценные годы жизни –'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['как своей, так и окружающих, выстраивая эффективную'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['коммуникацию и повышая общую эффективность вместе с'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['Youmee.'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-flex justify-content-center">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px; display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="images/individual.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card1_title'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: rgb(75, 173, 233)">
                        <img width="90" height="90" src="images/individual_white.png" class="mt-1 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card1_desc'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
                        <a href="#" class="learnMore IButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-flex justify-content-center">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px;  display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="images/talents.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card2_title'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: rgb(234, 51, 61)">
                        <img width="80" height="80" src="images/talent_white.png" class="mt-2 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card2_desc'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
                        <a href="#" class="learnMore PButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-flex justify-content-center">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px;  display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="images/kyc.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card3_title'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: #003C46">
                        <img width="90" height="90" src="images/kyc_white.png" class="mt-1 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card3_desc'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
                        <a href="#" class="learnMore KYCButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-flex justify-content-center">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px;  display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="images/hr.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card4_title'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: rgb(210, 58, 225);">
                        <img width="90" height="90" src="images/HR_white.png" class="mt-2 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card4_desc'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
                        <a href="#" class="learnMore HRButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="container row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46;"><?= $data['analysis'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-between mb-5">
            <p class="text-center" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['analysis_text1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-between mb-5">
            <ul class="analysis-pill nav nav-pills nav-justified mb-5" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button style="border-radius: 5px 0px 0px 5px!important" class="nav-link active" id="pills-1" data-bs-toggle="pill" data-bs-target="#pills-tab-1" type="button" role="tab" aria-controls="pills-tab-1" aria-selected="true"><?= $data['analysis_tab1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-2" data-bs-toggle="pill" data-bs-target="#pills-tab-2" type="button" role="tab" aria-controls="pills-tab-2" aria-selected="true"><?= $data['analysis_tab2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-3" data-bs-toggle="pill" data-bs-target="#pills-tab-3" type="button" role="tab" aria-controls="pills-tab-3" aria-selected="true"><?= $data['analysis_tab3'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-4" data-bs-toggle="pill" data-bs-target="#pills-tab-4" type="button" role="tab" aria-controls="pills-tab-4" aria-selected="true"><?= $data['analysis_tab4_5'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button style="border-radius: 0px 5px 5px 0px!important" class="nav-link" id="pills-6" data-bs-toggle="pill" data-bs-target="#pills-tab-6" type="button" role="tab" aria-controls="pills-tab-6" aria-selected="true"><?= $data['analysis_tab6'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                </li>
            </ul>
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tab-1" role="tabpanel" aria-labelledby="pills-tab-1" tabindex="0">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Extraversion'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Introversion'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Courage'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Persistence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Strength of will'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><div class="text-sm"><?= $data['Willpower (in the fight against temptations)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></div></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Willpower (in achieving the goals)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Willpower (with an application of physical effort)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Physical endurance'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Self - sacrifice'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Generosity'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Optimism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Mercy and compassion'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Inborn kindness'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Greatness (ability to forgive)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Guilt (take the blame for your own and other people\'s mistakes)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Mental endurance'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Determination'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Flexibility'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Modesty'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Fidelity to principles and beliefs'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Self-esteem'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Anxiety'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Tolerance'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Patience'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Processing'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Sincerity (directness)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Impulse control (ability to resist spontaneous desires)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Responsibility and sense of duty'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Selflessness (readiness to help without calculation to gain benefits)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Talent for disinterested friendship'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Responsiveness (attentiveness to the problems of others)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Idealism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Arrogance in relation to others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Envying'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to be content with small'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Meticulousness'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Skepticism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Suspicion (negative views, to complete confidence)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Caution'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Adventurism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Acceptance of risk'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to console'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Consolation of others during grief'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Pessimism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Expression of discontent (dissatisfaction)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Nagging in case of discontent'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Aggressiveness (the possibility of aggression in conversations,  especially raising the voice)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Discipline alone with you'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Discipline in work'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Accuracy in personal things'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Desire (internal need) to wealth'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Unproductiveness'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Stubbornness (irrational insistence of your opinion)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Following the law (can a person endure the law if necessary)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Dependence on the opinion of the spouse/spouse'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Dependence on the opinion of society'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Physical pain resistance'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Revenge (desire for retaliation for someone else\'s evil)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Health vulnerability as a result of prolonged stress'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Vulnerability to bad habits'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Hatred on the basis of envy'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Hatred on the basis of an infringed pride'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tab-2" role="tabpanel" aria-labelledby="pills-tab-2" tabindex="1">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The level of intellectual development (IQ)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotional intelligence (EQ)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Spatial intelligence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Mathematical intelligence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Financial intelligence (talent to earn money in comparison with the most successful people)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Combinatorics, gaming intelligence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Social intelligence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Talent for deception, falsification and fraud'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['A dodgy mind (a mindset that allows you to find a lot of solutions and opportunities at once)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Non -standard solutions'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Analytic mind'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Structural thinking'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tab-3" role="tabpanel" aria-labelledby="pills-tab-3" tabindex="2">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Sociability'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Friendliness'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to hide emotions'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to defend one\'s own interests'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to compromise'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Compliance with agreements'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to subordinate others to their will'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Verbal humiliation and mockery of others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to encourage and inspire others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to be cruel'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to manipulate'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Ability to understand people'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Flattery'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to calm'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Demonstrativeness in the expression of hatred'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotionality in communication'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Manipulation by emotions of others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Demonstrativeness in the expression of emotions'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Adaptability (talent to find a common language with different people)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Talent to look at the situation through the eyes of the interlocutor'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Talent to negotiate'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Warmth during negotiations'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Talent to conduct hard negotiations'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The probability of using blackmail during negotiations'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tab-4" role="tabpanel" aria-labelledby="pills-tab-4" tabindex="3">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotionality'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Empathy'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotional stability (regarding feelings for other people)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotional vulnerability'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Nervous excitability'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['A tendency to nostalgia'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The need for attention'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Dependence on motivation in the form of emotional stimulation on other'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Vulnerability due to contempt of others regarding themselves'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The possibility of conflict behavior in certain situations'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Predisposition to physical violence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Short -term control of emotions'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Long -term control of emotions'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to hide hatred'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Regret for actions that caused damage to others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Readiness for radical life changes'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The need for personal space in the family'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The speed of bringing to a state of irritability (temper)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The speed of bringing to anger state'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The speed of bringing to a state of affect'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                    </div>
                </div>
                <!--                <div class="tab-pane fade" id="pills-tab-5" role="tabpanel" aria-labelledby="pills-tab-5" tabindex="4">-->
                <!--                    <div class="container row m-0 p-0">-->
                <!--                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">-->
                <!--                            </div>-->
                <!---->
                <!--                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">-->
                <!--                             </div>-->
                <!---->
                <!--                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">-->
                <!--                          </div>-->
                <!---->
                <!--                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">-->
                <!--                            </div>-->
                <!---->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="tab-pane fade" id="pills-tab-6" role="tabpanel" aria-labelledby="pills-tab-6" tabindex="5">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Independence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The desire to lead (in comparison with the most outstanding leaders)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The talent of other management'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Perception of oral speech'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Be under the influence of the words of others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Team spirit'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Competition'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Visual perception of information'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Perception of written text (the best assimilates written information than images or oral speech)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to concentrate'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Short -term planning'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Initiative'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotionality in work'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Abuse of influence on other people to achieve their own goals'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Orientation on the result'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The need for the approval of the leadership (\'praise me\')'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The desire for separatism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Protection of the interests of subordinates before the leadership'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The desire to be the head of the family'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Desire for financial independence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Conflict Management'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Willingness to sacrifice others for a good goal'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Ambitiousness'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Readiness to make the consequences of decisions made'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to obey if necessary'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Active participation in activities'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['A tendency to distance from the team'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Hard work'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Stress resistance'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Orientation to the process'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Careerism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Readiness \'go on the head\''][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Oppositionist'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Perfectionism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Attitude to money and resources'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Excessive resource consumption'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container mt-5">
    <div class="container row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['accuracy_title'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h1>
        </div>
    </div>
    <div class="container row m-0 p-0">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-center mb-5 ps-0 pe-5 mt-3">
            <p class="text-start mb-0" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['accuracy_text1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
            <p class="text-start" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['accuracy_text2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
            <p class="text-start" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['accuracy_text3'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex flex-column mb-5 ps-0 pe-0">
            <div class="d-flex w-100 p-3 pe-0" style="color: rgb(114, 114, 114);">
                <img width="50" height="50" src="images/individual.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy">
                <div class="ms-3" style="width: inherit">
                    <label class="mb-1"><?= $data['progress1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    <div class="progress mt-1" role="progressbar" aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px; border-radius: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%; background-color: rgb(75, 173, 233)">90%</div>
                    </div>
                </div>
            </div>
            <div class="d-flex w-100 p-3 pe-0"  style="color: rgb(114, 114, 114);">
                <img width="50" height="50" src="images/talents.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy">
                <div class="ms-3" style="width: inherit">
                    <label class="mb-1"><?= $data['progress2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    <div class="progress mt-1" role="progressbar" aria-label="Animated striped example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 20px; border-radius: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%; background-color: rgb(234, 51, 61)">80%</div>
                    </div>
                </div>
            </div>
            <div class="d-flex w-100 p-3 pe-0" style="color: rgb(114, 114, 114);">
                <img width="50" height="50" src="images/hr.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy">
                <div class="ms-3" style="width: inherit">
                    <label class="mb-1"><?= $data['progress3'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    <div class="progress mt-1" role="progressbar" aria-label="Animated striped example" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="height: 20px; border-radius: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 82%; background-color:rgb(210, 58, 225)">82%</div>
                    </div>
                </div>
            </div>
            <div class="d-flex w-100 p-3 pe-0" style="color: rgb(114, 114, 114);">
                <img width="50" height="50" src="images/kyc.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy">
                <div class="ms-3" style="width: inherit">
                    <label class="mb-1"><?= $data['progress4'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    <div class="progress mt-1" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 20px; border-radius: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%; background-color: #003C46">75%</div>
                    </div>
                </div>
            </div>
<!--            <div class="w-100 pt-3 d-flex flex-column align-items-end pe-0" style="color: rgb(114, 114, 114);">-->
<!--                <label class="mb-1">--><?//= $data['try_now'][isset($_GET['lang']) ? 'en' : 'ru'] ?><!--</label>-->
<!--                <button class="btn fillButton mt-1 w-50 me-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;">--><?//= $data['button1'][isset($_GET['lang']) ? 'en' : 'ru'] ?><!--</button>-->
<!--            </div>-->
        </div>
    </div>
</div>

    <div class="container-fluid firstContainer mb-3" style="min-height: 150px">
        <div id="particles-js-footer" style="height: 150px"></div>
        <div class="container">
            <div class="container d-grid gap-2 d-md-block col-12 mx-auto text-center" style="margin: 0!important; margin-top: 2rem!important; padding: 0!important; z-index: 10; position: absolute; top: 20px">
                <button class="btn fillButton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                <button class="btn outlineButton"><?= $data['button2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
            </div>
        </div>
    </div>

<?php include('footer.php') ?>