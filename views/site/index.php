<?php include('header.php') ;
use yii\helpers\Url;
?>

<div class="container-fluid firstContainer">
    <div id="particles-js"></div>
    <img src="images/collage.jpg" class="testBack">
    <img src="images/chineese.png" class="backImage img-fluid">
    <div class="container" style="padding-top: 21%">
        <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span class="main-title" style="color: #003C46;"><?= $data['title1_1'][$lang] ?></span><br><span style="color: #003C46;"><?= $data['title1_2'][$lang] ?> </span><br><span style="color: rgb(210, 58, 225);"> <?= $data['title1_3'][$lang] ?></span></h1>
        <div class="container d-grid gap-2 d-none d-md-block col-12 mx-auto" style="margin: 0!important; margin-top: 4rem!important; padding: 0!important; z-index: 10; position: relative">
            <button class="btn fillButton mx-auto" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][$lang] ?></button>
            <button class="btn outlineButton mx-auto" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions"><?= $data['button2'][$lang] ?></button>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5" id="how-it-works">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
        <h1 style="color: #003C46"><?= $data['menu2'][$lang] ?></h1>
    </div>
    <div class="container row m-0 p-0">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-start mb-5 ps-0 pe-0">
            <img src="images/PC.png" alt="" class="img-fluid" style="height: max-content!important;align-self: center">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex flex-column mb-5 ps-0 pe-0">
            <p class="subtitle" style="color: #464646!important;">
                <span><?= $data['title2_1'][$lang] ?> <a href="/about-technology" style="color: #003C46; font-weight: 400"><?= $data['технология Mizagene'][$lang] ?></a> <?= $data['title2_1_1'][$lang] ?> <?= $data['title2_1_2'][$lang] ?> </span>
                <span class="" >
                            <span  style="" class="mt-3 d-block">
                                <img src="images/face_index.png" width="20px">
                                <!--                            <i class="fa-solid fa-circle fa-beat-fade fa-sm" style="color: #b233dc;margin-right: 15px"></i>-->
                                <?= $data['title2_1_3'][$lang] ?>
                            </span>
                            <span class="d-block" style="">
                                <img src="images/scale.png" width="20px">
                                <!--                            <i class="fa-solid fa-circle fa-beat-fade fa-sm" style="color: #b233dc;margin-right: 15px"></i>-->
                                <?= ' ' . $data['title2_1_4'][$lang] ?></span>
                            <span style="" class="mb-3 d-block">
                                <img src="images/scale.png" width="20px">
                                <!--                            <i class="fa-solid fa-circle fa-beat-fade fa-sm" style="color: #b233dc;margin-right: 15px"></i>-->
                                <?= ' ' . $data['title2_1_5'][$lang] ?></span>

                        </span>
                <span class="mb-3"><?= ' ' . $data['title2_1_6'][$lang] ?></span>
                <?= $data['title2_1_7'][$lang] ?>
                <?= $data['title2_1_8'][$lang] ?><br><br>
            <div class="text-center">
                <button class="btn fillButton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][$lang] ?></button>
            </div>

            </p>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="container row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['menu3'][$lang] ?></h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 " style="font-size: 19px;">
            <p class="m-0" style="font-size: 19px;color: rgb(114, 114, 114);"><a href="/serive" style="color: #003C46; font-weight: 400"><?= $data['Youmee Technologies'][$lang] ?></a><?= $data[' –  эксклюзивный партнер Mizagene'][$lang] ?> <?= $data['Technologies и вендор программного обеспечения типов SAAS и'][$lang] ?> <?= $data['PAAS в  области разработки наукоемких IT решений на базе'][$lang] ?> <?= $data['запатентованной технологии Mizagene.'][$lang] ?></p>
            <p class="m-0" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Наши технологические и программные решения помогают'][$lang] ?><?= $data['людям осознать свой потенциал, понять сильные и слабые'][$lang] ?><?= $data['стороны личности, а также найти  своевременное применение'][$lang] ?> <?= $data['врожденным талантам. Экономьте драгоценные годы жизни –'][$lang] ?> <?= $data['как своей, так и окружающих, выстраивая эффективную'][$lang] ?> <?= $data['коммуникацию и повышая общую эффективность вместе с'][$lang] ?> <?= $data['Youmee.'][$lang] ?></p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-3">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px; display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="images/individual.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card1_title'][$lang] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: rgb(75, 173, 233)">
                        <img width="90" height="90" src="images/individual_white.png" class="mt-1 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card1_desc'][$lang] ?></p>
                        <a href="/individual-solutions" class="learnMore IButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][$lang] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-3">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px;  display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="images/talents.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card2_title'][$lang] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: rgb(234, 51, 61)">
                        <img width="80" height="80" src="images/talent_white.png" class="mt-2 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card2_desc'][$lang] ?></p>
                        <a href="/personal-solutions" class="learnMore PButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][$lang] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-3">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px;  display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="images/kyc.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card3_title'][$lang] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: #003C46">
                        <img width="90" height="90" src="images/kyc_white.png" class="mt-1 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card3_desc'][$lang] ?></p>
                        <a href="/kyc-solutions" class="learnMore KYCButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][$lang] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 d-flex justify-content-center my-3">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px;  display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="images/hr.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card4_title'][$lang] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: rgb(210, 58, 225);">
                        <img width="90" height="90" src="images/HR_white.png" class="mt-2 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card4_desc'][$lang] ?></p>
                        <a href="/hr-solutions" class="learnMore HRButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][$lang] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="container row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46;"><?= $data['analysis'][$lang] ?></h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-between mb-5">
            <p class="text-center" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['analysis_text1'][$lang] ?></p>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-between mb-5">
            <ul class="analysis-pill nav nav-pills nav-justified mb-5 flex-column flex-sm-row" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button style="border-radius: 5px 0px 0px 5px!important" class="nav-link active" id="pills-1" data-bs-toggle="pill" data-bs-target="#pills-tab-1" type="button" role="tab" aria-controls="pills-tab-1" aria-selected="true"><?= $data['analysis_tab1'][$lang] ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-2" data-bs-toggle="pill" data-bs-target="#pills-tab-2" type="button" role="tab" aria-controls="pills-tab-2" aria-selected="true"><?= $data['analysis_tab2'][$lang] ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-3" data-bs-toggle="pill" data-bs-target="#pills-tab-3" type="button" role="tab" aria-controls="pills-tab-3" aria-selected="true"><?= $data['analysis_tab3'][$lang] ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-4" data-bs-toggle="pill" data-bs-target="#pills-tab-4" type="button" role="tab" aria-controls="pills-tab-4" aria-selected="true"><?= $data['analysis_tab4_5'][$lang] ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button style="border-radius: 0px 5px 5px 0px!important" class="nav-link" id="pills-6" data-bs-toggle="pill" data-bs-target="#pills-tab-6" type="button" role="tab" aria-controls="pills-tab-6" aria-selected="true"><?= $data['analysis_tab6'][$lang] ?></button>
                </li>
            </ul>
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tab-1" role="tabpanel" aria-labelledby="pills-tab-1" tabindex="0">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Extraversion'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Introversion'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Courage'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Persistence'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Strength of will'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><div class="text-sm"><?= $data['Willpower (in the fight against temptations)'][$lang] ?></div></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Willpower (in achieving the goals)'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Willpower (with an application of physical effort)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Physical endurance'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Self - sacrifice'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Generosity'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Optimism'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Mercy and compassion'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Inborn kindness'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Greatness (ability to forgive)'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Guilt (take the blame for your own and other people\'s mistakes)'][$lang] ?></span></div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Mental endurance'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Determination'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Flexibility'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Modesty'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Fidelity to principles and beliefs'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Self-esteem'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Anxiety'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Tolerance'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Patience'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Processing'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Sincerity (directness)'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Impulse control (ability to resist spontaneous desires)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Responsibility and sense of duty'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Selflessness (readiness to help without calculation to gain benefits)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Talent for disinterested friendship'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Responsiveness (attentiveness to the problems of others)'][$lang] ?></span></div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Idealism'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Arrogance in relation to others'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Envying'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to be content with small'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Meticulousness'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Skepticism'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Suspicion (negative views, to complete confidence)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Caution'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Adventurism'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Acceptance of risk'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to console'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Consolation of others during grief'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Pessimism'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Expression of discontent (dissatisfaction)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Nagging in case of discontent'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Aggressiveness (the possibility of aggression in conversations,  especially raising the voice)'][$lang] ?></span></div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Discipline alone with you'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Discipline in work'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Accuracy in personal things'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Desire (internal need) to wealth'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Unproductiveness'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Stubbornness (irrational insistence of your opinion)'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Following the law (can a person endure the law if necessary)'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Dependence on the opinion of the spouse/spouse'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Dependence on the opinion of society'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Physical pain resistance'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Revenge (desire for retaliation for someone else\'s evil)'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Health vulnerability as a result of prolonged stress'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Vulnerability to bad habits'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Hatred on the basis of envy'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Hatred on the basis of an infringed pride'][$lang] ?></span></div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tab-2" role="tabpanel" aria-labelledby="pills-tab-2" tabindex="1">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The level of intellectual development (IQ)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotional intelligence (EQ)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Spatial intelligence'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Mathematical intelligence'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Financial intelligence (talent to earn money in comparison with the most successful people)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Combinatorics, gaming intelligence'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Social intelligence'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Talent for deception, falsification and fraud'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['A dodgy mind (a mindset that allows you to find a lot of solutions and opportunities at once)'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Non -standard solutions'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Analytic mind'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Structural thinking'][$lang] ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tab-3" role="tabpanel" aria-labelledby="pills-tab-3" tabindex="2">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Sociability'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Friendliness'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to hide emotions'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to defend one\'s own interests'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to compromise'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Compliance with agreements'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to subordinate others to their will'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Verbal humiliation and mockery of others'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to encourage and inspire others'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to be cruel'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to manipulate'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Ability to understand people'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Flattery'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to calm'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Demonstrativeness in the expression of hatred'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotionality in communication'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Manipulation by emotions of others'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Demonstrativeness in the expression of emotions'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Adaptability (talent to find a common language with different people)'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Talent to look at the situation through the eyes of the interlocutor'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Talent to negotiate'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Warmth during negotiations'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Talent to conduct hard negotiations'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The probability of using blackmail during negotiations'][$lang] ?></span></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tab-4" role="tabpanel" aria-labelledby="pills-tab-4" tabindex="3">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotionality'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Empathy'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotional stability (regarding feelings for other people)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotional vulnerability'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Nervous excitability'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['A tendency to nostalgia'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The need for attention'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Dependence on motivation in the form of emotional stimulation on other'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Vulnerability due to contempt of others regarding themselves'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The possibility of conflict behavior in certain situations'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Predisposition to physical violence'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Short -term control of emotions'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Long -term control of emotions'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to hide hatred'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Regret for actions that caused damage to others'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Readiness for radical life changes'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The need for personal space in the family'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The speed of bringing to a state of irritability (temper)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The speed of bringing to anger state'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The speed of bringing to a state of affect'][$lang] ?></span></div>
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
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Independence'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The desire to lead (in comparison with the most outstanding leaders)'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The talent of other management'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Perception of oral speech'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Be under the influence of the words of others'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Team spirit'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Competition'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Visual perception of information'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Perception of written text (the best assimilates written information than images or oral speech)'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to concentrate'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Short -term planning'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Initiative'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Emotionality in work'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Abuse of influence on other people to achieve their own goals'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Orientation on the result'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The need for the approval of the leadership (\'praise me\')'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The desire for separatism'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Protection of the interests of subordinates before the leadership'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The desire to be the head of the family'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Desire for financial independence'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Conflict Management'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Willingness to sacrifice others for a good goal'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Ambitiousness'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Readiness to make the consequences of decisions made'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['The ability to obey if necessary'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Active participation in activities'][$lang] ?></span></div>
                            <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['A tendency to distance from the team'][$lang] ?></span></div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Hard work'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Stress resistance'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Orientation to the process'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Careerism'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Readiness \'go on the head\''][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Oppositionist'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Perfectionism'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Attitude to money and resources'][$lang] ?></span></div>
                            <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important;"></i><span><?= $data['Excessive resource consumption'][$lang] ?></span></div>
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
            <h1 style="color: #003C46"><?= $data['accuracy_title'][$lang] ?></h1>
        </div>
    </div>
    <div class="container row m-0 p-0">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-center mb-5 ps-0 pe-5 mt-3">
            <p class="text-start mb-0" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['accuracy_text1'][$lang] ?></p>
            <p class="text-start" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['accuracy_text2'][$lang] ?></p>
            <p class="text-start" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['accuracy_text3'][$lang] ?></p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex flex-column mb-5 ps-0 pe-0">
            <div class="d-flex w-100 p-3 pe-0" style="color: rgb(114, 114, 114);">
                <img width="50" height="50" src="images/individual.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy">
                <div class="ms-3" style="width: inherit">
                    <label class="mb-1"><?= $data['progress1'][$lang] ?></label>
                    <div class="progress mt-1" role="progressbar" aria-label="Animated striped example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 20px; border-radius: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%; background-color: rgb(75, 173, 233)">90%</div>
                    </div>
                </div>
            </div>
            <div class="d-flex w-100 p-3 pe-0"  style="color: rgb(114, 114, 114);">
                <img width="50" height="50" src="images/talents.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy">
                <div class="ms-3" style="width: inherit">
                    <label class="mb-1"><?= $data['progress2'][$lang] ?></label>
                    <div class="progress mt-1" role="progressbar" aria-label="Animated striped example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 20px; border-radius: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%; background-color: rgb(234, 51, 61)">80%</div>
                    </div>
                </div>
            </div>
            <div class="d-flex w-100 p-3 pe-0" style="color: rgb(114, 114, 114);">
                <img width="50" height="50" src="images/hr.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy">
                <div class="ms-3" style="width: inherit">
                    <label class="mb-1"><?= $data['progress3'][$lang] ?></label>
                    <div class="progress mt-1" role="progressbar" aria-label="Animated striped example" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="height: 20px; border-radius: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 82%; background-color:rgb(210, 58, 225)">82%</div>
                    </div>
                </div>
            </div>
            <div class="d-flex w-100 p-3 pe-0" style="color: rgb(114, 114, 114);">
                <img width="50" height="50" src="images/kyc.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy">
                <div class="ms-3" style="width: inherit">
                    <label class="mb-1"><?= $data['progress4'][$lang] ?></label>
                    <div class="progress mt-1" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 20px; border-radius: 3px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%; background-color: #003C46">75%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>