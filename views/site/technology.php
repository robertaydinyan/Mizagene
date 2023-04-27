<?php include('header.php')?>

    <div class="container-fluid firstContainer" style="min-height: 450px">
        <div id="particles-js" style="min-height: 450px"></div>
        <div class="container row d-flex mx-auto px-0" style="padding-top: 155px">
            <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: #003C46"><?= $data['t_tile'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></h1>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 400; color: #003C46"><?= $data['t_tile1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['t_tile2'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <span style="font-weight: 400; color: #003C46"><?= $data['t_tile3'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span>, <span style="font-weight: 400; color: #003C46"><?= $data['t_tile4'][isset($_GET['lang']) ? 'en' : 'ru'] ?> </span>, <span style="font-weight: 400; color: #003C46"><?= $data['t_tile5'][isset($_GET['lang']) ? 'en' : 'ru'] ?> </span> и <span style="font-weight: 400; color: #003C46"><?= $data['t_tile6'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span>.<?= $data['t_tile7'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
                    <img src="/images/mizagene_black.png" alt=""width="70%">
                </div>
            </div>

        </div>
    </div>
<div class="container-fluid firstContainer technologyParticles mb-3" style="min-height: 400px">
    <div id="particles-js-team" style="height: 400px"></div>
    <div class="container mt-3">
        <div class="container row d-flex mx-auto px-0" style="margin: 0 auto!important; padding: 0!important; position: absolute; top: 0;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46"><?= $data['command_m'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h1>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                <div class="d-flex">
                    <img src="/images/Rushandel.png" alt="" width="200px">
                    <div style="align-self: center;">
                        <h6 class="mb-0">Hamid Reza</h6>
                        <p>SHEIKH ROSHANDEL</p>
                        <span style="display: block; color: rgb(210, 58, 225)">Co-Founder</span>
                        <span>Author</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                <div class="d-flex">
                    <img src="/images/Armen.png" alt="" width="200px">
                    <div style="align-self: center;">
                        <h6 class="mb-0">Armen</h6>
                        <p>GABRIELYAN</p>
                        <span style="display: block; color: rgb(210, 58, 225)">Co-Founder</span>
                        <span>BDO</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                <div class="d-flex">
                    <img src="/images/Meidi.png" alt="" width="200px">
                    <div style="align-self: center;">
                        <h6 class="mb-0">Mehdi</h6>
                        <p>VALINEJAD</p>
                        <span style="display: block; color: rgb(210, 58, 225)">Co-Founder</span>
                        <span>CTO</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                <div class="d-flex">
                    <img src="/images/Aram.png" alt="" width="200px">
                    <div style="align-self: center;">
                        <h6 class="mb-0">Aram</h6>
                        <p>SARKISYAN</p>
                        <span style="display: block; color: rgb(210, 58, 225)">Co-Founder</span>
                        <span>Architect PO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="container row mx-auto px-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['Наука «Mizagene»'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['В основе запатентованной технологии лежит одноименное ближневосточное научное учение Mizagene.'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Один из принципов этого учения в переносе на современный язык гласит следующее: «Человек рождается , таким какой он есть, а лицо человека, как открытая книга, отражает его суть».'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Учение Mizagene утверждает, что человек в течение жизни не меняется, а любые изменения в его поведении объясняются сознательным выбором, то есть адаптацией личности к социальной среде под влиянием приобретенного опыта. При этом подсознание, отвечающее за неконтролируемые сознанием процессы сильных изменений не претерпевает.'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Учение на протяжение веков  сильно эволюционировало, и эпоха за эпохой вбирало знания лучших умов, которые искали закономерности во внешности людей и ее взаимосвязи с их врожденным здоровьем и характером.'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
        </div>
    </div>
</div>

    <div class="container mt-5 mb-5">
        <div class="container row mx-auto px-0">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46"><?= $data['Технология: 3 фазы развития'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="padding-right: 30px!important; text-align: start; background-color: rgba(0, 60, 70, 0.1); border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span>v<?= $data['Драгоценный опыт предков в условиях современного мироустройства оказался несколько примитивен и не смог в полной мере отразить природу современного человека.'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span><span style="display: block; margin-top: 1rem;"><?= $data['Когда это стало очевидным, и родилась идея создания уникальной технологии, которая бы унаследовала название и суть учения, и вместе с тем вобрала бы в себя знания из сотен исторических и научных трудов и современной научной литературы в области психологии и медицины. Так'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <span style="font-weight: 400; color: #003C46"><?= $data['в 2006 году'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span> <?= $data['сформировалась база, которая и'][isset($_GET['lang']) ? 'en' : 'ru'] ?><span style="font-weight: 400; color: #003C46"><?= $data['легла в основу ядра Технологи.'][isset($_GET['lang']) ? 'en' : 'ru'] ?> </span></span></p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 400; color: #003C46"><?= $data['Вторая фаза'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span> <?= $data['создания Технологии заключалась в математическом обосновании и тестировании выявленных закономерностей'][isset($_GET['lang']) ? 'en' : 'ru'] ?><span style="font-weight: 400; color: #003C46"><?= $data['на фокус-группе, составившей 200,000 человек.'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="padding-left: 30px!important; text-align: start; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Так появились первые, или'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <span style="font-weight: 400; color: #003C46"><?= $data['«первичные» параметры'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span>,<?= $data['выдававшие результат с ошеломительной точностью:'][isset($_GET['lang']) ? 'en' : 'ru'] ?>  <span style="font-weight: 400; color: #003C46">97%</span>.<?= $data['Эти же параметры и легли в основу третьей фазы создания Технологии – выявления и математического обоснования «новых» параметров, отражающих современный уклад жизни человека и его взаимоотношений с другими.'][isset($_GET['lang']) ? 'en' : 'ru'] ?> </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span><span style="font-weight: 400; color: #003C46"><?= $data['«Новые» параметры'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span>,<?= $data['как и «первичные» проходят тщательную проверку и рассчитываются исходным кодом программного ядра технологии под контролем психологов и психиатров. Это постоянный процесс, не имеющий конца, так как количество параметров со временем будет только расти.'][isset($_GET['lang']) ? 'en' : 'ru'] ?> </span> <span style="display: block; margin-top: 1rem;"><span style="font-weight: 400; color: #003C46"><?= $data['На сегодня разработано более 1500 параметров. При этом активно используются только 500 из них.'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></span></p>
            </div>
        </div>
    </div>



<div class="container mt-5 mb-5">
    <div class="container row mx-auto px-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['Возможности технологии'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Технология Mizagene позволяет получить исходные данные о врожденных чертах характера, психических и физических особенностях, предрасположенностях, интеллекте, коммуникативных навыках и врожденных талантах только на основании портретного фото и нескольких исходных данных:'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4 mt-4">
                <img src="/images/add_new_profile.png" alt="" style="width: 100%">
            </div>
            </p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Технология получает обезличенную информацию о субъекте и выдает результат на основании алгоритмов программного ядра. Точность результата прошедших тестирование параметров составляет от 80 до 92%, а в некоторых случаях достигает 97%.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['То есть для того, чтобы провести анализ личности, нам не нужно знать имя человека, расу, мейл, телефона или номер кредитной карты. В случае с SDK мы не храним даже фотографию контрагента. Но какой бы вариант доставки продукта Вы не предпочли, мы гарантируем, что не передаем информацию третьим лицам.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Также Mizagene можно адаптировать под любую конкретную потребность всего за несколько дней и интегрировать с другими программными продуктами, что делает наше решение очень востребованным и масштабируемым.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>

        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="container row mx-auto px-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['menu3'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 " style="font-size: 19px;">
            <p class="m-0" style="font-size: 19px;color: rgb(114, 114, 114);"><a href="/service" style="color: #003C46; font-weight: 400"><?= $data['Youmee Technologies'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a><?= $data[' –  эксклюзивный партнер Mizagene'][isset($_GET['lang']) ? 'en' : 'ru'] ?><?= $data['Technologies и вендор программного обеспечения типов SAAS и'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['PAAS в  области разработки наукоемких IT решений на базе'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['запатентованной технологии Mizagene.'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
            <p class="m-0" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Наши технологические и программные решения помогают'][isset($_GET['lang']) ? 'en' : 'ru'] ?><?= $data['людям осознать свой потенциал, понять сильные и слабые'][isset($_GET['lang']) ? 'en' : 'ru'] ?><?= $data['стороны личности, а также найти  своевременное применение'][isset($_GET['lang']) ? 'en' : 'ru'] ?><?= $data['врожденным талантам. Экономьте драгоценные годы жизни –'][isset($_GET['lang']) ? 'en' : 'ru'] ?><?= $data['как своей, так и окружающих, выстраивая эффективную'][isset($_GET['lang']) ? 'en' : 'ru'] ?><?= $data['коммуникацию и повышая общую эффективность вместе с'][isset($_GET['lang']) ? 'en' : 'ru'] ?> <?= $data['Youmee.'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-flex justify-content-center my-3">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px; display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="/images/individual.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card1_title'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: rgb(75, 173, 233)">
                        <img width="90" height="90" src="/images/individual_white.png" class="mt-1 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card1_desc'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
                        <a href="/individual-solutions" class="learnMore IButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-flex justify-content-center my-3">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px;  display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="/images/talents.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card2_title'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: rgb(234, 51, 61)">
                        <img width="80" height="80" src="/images/talent_white.png" class="mt-2 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card2_desc'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
                        <a href="#" class="learnMore PButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-flex justify-content-center my-3">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px;  display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="/images/kyc.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card3_title'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: #003C46">
                        <img width="90" height="90" src="/images/kyc_white.png" class="mt-1 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card3_desc'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
                        <a href="/kyc-solutions" class="learnMore KYCButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-flex justify-content-center my-3">
            <div class="flip-card">
                <div class="flip-card-inner" style="border-radius: 5px;">
                    <div class="flip-card-front" style="border-radius: 5px;  display: flex; flex-direction: column; text-align: center; justify-content: center;">
                        <img width="90" height="90" src="/images/hr.png" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" style="align-self: center;">
                        <h5 class="mt-3" style="padding: 20px"><?= $data['card4_title'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h5>
                    </div>
                    <div class="flip-card-back text-center" style="border-radius: 5px; background: rgb(210, 58, 225);">
                        <img width="90" height="90" src="/images/HR_white.png" class="mt-2 attachment-full size-full" alt="a" decoding="async" loading="lazy">
                        <p style="padding: 15px 20px 0 20px;font-size: 15px;"><?= $data['card4_desc'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
                        <a href="/hr-solutions" class="learnMore HRButton" style="position: absolute; bottom: 10px;"><?= $data['learnMore'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid firstContainer mb-sm-3" style="min-height: 150px">
    <div id="particles-js-footer" style="height: 150px"></div>
    <div class="container mx-auto px-0">
        <div class="container d-grid gap-2 d-md-block col-12 mx-auto text-center" style="margin: 0!important; margin-top: 2rem!important; padding: 0!important; z-index: 10; position: absolute; top: 20px">
            <button class="btn fillButton mx-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
            <button class="btn outlineButton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions"><?= $data['button2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
