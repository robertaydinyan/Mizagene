<?php include('header.php')?>

<div class="container-fluid firstContainer">
    <div id="particles-js"></div>
    <img src="/images/collage.jpg" class="testBack">
    <img src="/images/chineese.png" class="backImage">
    <div class="container" style="padding-top: 16%">
        <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: rgb(179, 52, 220)">KYC Solutions</span></h1>
        <p class="subtitle">
        </p>
        <div class="container d-grid gap-2 d-md-block col-12 mx-auto mt-5" style="position: absolute; bottom: 40px; margin: 0!important; padding: 0!important">
            <button class="btn fillButton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
            <button class="btn outlineButton"><?= $data['button2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
        </div>
    </div>
</div>

    <div class="container mt-5 mb-5">
        <div class="container row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46">информация</h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">Если у вас большая клиентская база, а бизнес-процессы требуют обязательной верификации пользователей, - Вы наверняка уже внедрили или приняли решение по внедрению системы типа KYC (Know Your Customer). Они используются для подтверждения контрагентов перед проведением финансовых операций и широко применимы в следующих индустриях: FinTech (финансовые организации, банки), индустрия игр и развлечений, страхование и медицина, электронная коммерция, шеринговые компании и т.д.</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">Основные этапы процессинга информации в рамках KYC – это:</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">1. Обработка документа</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">2. Сбор биометрической информации в рамках фото и видео съемки</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">3. Сопоставление фото с документом (FaceMatching)</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">4. Проверка по AML (Anti-Money Laundering) и другим базам</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">5. (в некоторых случаях) обеспечение OTP входа в сервис через биометрическую верификацию лица клиента</p>

                <h4>Какие задачи решает внедренная KYC система</h4>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus" style="color: #528135;"></i>Защита от мошенников*</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus" style="color: #528135;"></i>Ускорение верификации клиента</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus" style="color: #528135;"></i>Упрощенный вход в сервис</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus" style="color: #528135;"></i>Исключение ошибок и опечаток</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus" style="color: #528135;"></i>Проверка возраста клиента</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus" style="color: #528135;"></i>Защита от попыток взлома</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">*только на основании имеющихся баз данных*</p>

                <h4>Чего ни одна KYC система в мире дать вам не сможет:</h4>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark" style="color: #ff2600;"></i>Определение целевого клиента уже на этапе верификации</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark" style="color: #ff2600;"></i>Предиктивный анализ поведения клиента в вашей системе</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark" style="color: #ff2600;"></i>Отраслевой скоринг рисков (разработанный под требования Вашей отрасли)</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark" style="color: #ff2600;"></i>Сегментация клиентов для повышения эффективности маркетинговой стратегии</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark" style="color: #ff2600;"></i>Интеллектуальные и психологические особенности клиента</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark" style="color: #ff2600;"></i>Предрасположенность к мошенничеству</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark" style="color: #ff2600;"></i>Отношение к деньгам и долговым обязательствам</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark" style="color: #ff2600;"></i>любые другие репорты, получаемые на основании личной информации о характере человека</p>

                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><b>Но все это может дать интеграция Вашей KYC системы с Youmee KYC</b> – модулем предиктивного анализа контрагента, который работает на базе технологии Mizagene.</p>

            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46"><?= $data['analysis'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-between mb-5">
                <p class="text-center" style="font-size: 16px;color: rgb(114, 114, 114);"><?= $data['analysis_text1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
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
                        <button class="nav-link" id="pills-4" data-bs-toggle="pill" data-bs-target="#pills-tab-4" type="button" role="tab" aria-controls="pills-tab-4" aria-selected="true"><?= $data['analysis_tab4'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-5" data-bs-toggle="pill" data-bs-target="#pills-tab-5" type="button" role="tab" aria-controls="pills-tab-5" aria-selected="true"><?= $data['analysis_tab5'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button style="border-radius: 0px 5px 5px 0px!important" class="nav-link" id="pills-6" data-bs-toggle="pill" data-bs-target="#pills-tab-6" type="button" role="tab" aria-controls="pills-tab-6" aria-selected="true"><?= $data['analysis_tab6'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-tab-1" role="tabpanel" aria-labelledby="pills-tab-1" tabindex="0">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Extraversion'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Introversion'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Courage'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Courage'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Persistence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Strength of will'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Willpower (in the fight against temptations)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Willpower (in achieving the goals)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Willpower (with an application of physical effort)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Physical endurance'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Mental endurance'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Determination'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Flexibility'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Modesty'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Fidelity to principles and beliefs'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Self-esteem'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Anxiety'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Tolerance'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Patience'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Processing'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Idealism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Arrogance in relation to others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Envying'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to be content with small'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Meticulousness'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Skepticism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Suspicion (negative views, to complete confidence)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Caution'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Adventurism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Acceptance of risk'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Discipline alone with you'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Discipline in work'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Accuracy in personal things'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Desire (internal need) to wealth'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Unproductiveness'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Stubbornness (irrational insistence of your opinion)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Following the law (can a person endure the law if necessary)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Dependence on the opinion of the spouse/spouse'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Dependence on the opinion of society'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Physical pain resistance'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-2" role="tabpanel" aria-labelledby="pills-tab-2" tabindex="1">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The level of intellectual development (IQ)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Emotional intelligence (EQ)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Spatial intelligence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Mathematical intelligence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Financial intelligence (talent to earn money in comparison with the most successful people)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Combinatorics, gaming intelligence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Social intelligence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Talent for deception, falsification and fraud'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['A dodgy mind (a mindset that allows you to find a lot of solutions and opportunities at once)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Non -standard solutions'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Analytic mind'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Structural thinking'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-3" role="tabpanel" aria-labelledby="pills-tab-3" tabindex="2">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Sociability'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Friendliness'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to hide emotions'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to defend one\'s own interests'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to compromise'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Compliance with agreements'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to subordinate others to their will'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Verbal humiliation and mockery of others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to encourage and inspire others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to be cruel'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to manipulate'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Ability to understand people'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Flattery'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to calm'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Demonstrativeness in the expression of hatred'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Emotionality in communication'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Manipulation by emotions of others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Demonstrativeness in the expression of emotions'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Adaptability (talent to find a common language with different people)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Talent to look at the situation through the eyes of the interlocutor'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Talent to negotiate'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Warmth during negotiations'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Talent to conduct hard negotiations'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The probability of using blackmail during negotiations'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-4" role="tabpanel" aria-labelledby="pills-tab-4" tabindex="3">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Emotionality'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Empathy'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Emotional stability (regarding feelings for other people)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Emotional vulnerability'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Nervous excitability'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['A tendency to nostalgia'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The need for attention'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Dependence on motivation in the form of emotional stimulation on other'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Vulnerability due to contempt of others regarding themselves'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The possibility of conflict behavior in certain situations'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Predisposition to physical violence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Short -term control of emotions'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Long -term control of emotions'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to hide hatred'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Regret for actions that caused damage to others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Readiness for radical life changes'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The need for personal space in the family'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The speed of bringing to a state of irritability (temper)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The speed of bringing to anger state'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The speed of bringing to a state of affect'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-5" role="tabpanel" aria-labelledby="pills-tab-5" tabindex="4">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Self - sacrifice'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Generosity'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Optimism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Mercy and compassion'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Inborn kindness'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Greatness (ability to forgive)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Sincerity (directness)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Impulse control (ability to resist spontaneous desires)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Responsibility and sense of duty'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Selflessness (readiness to help without calculation to gain benefits)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Talent for disinterested friendship'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Responsiveness (attentiveness to the problems of others)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to console'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Consolation of others during grief'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Pessimism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Expression of discontent (dissatisfaction)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Nagging in case of discontent'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Aggressiveness (the possibility of aggression in conversations,  especially raising the voice)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Revenge (desire for retaliation for someone else\'s evil)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Health vulnerability as a result of prolonged stress'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Vulnerability to bad habits'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Guilt (take the blame for your own and other people\'s mistakes)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Hatred on the basis of envy'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Hatred on the basis of an infringed pride'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-6" role="tabpanel" aria-labelledby="pills-tab-6" tabindex="5">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Independence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The desire to lead (in comparison with the most outstanding leaders)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The talent of other management'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Perception of oral speech'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Be under the influence of the words of others'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Team spirit'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Competition'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Visual perception of information'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Perception of written text (the best assimilates written information than images or oral speech)'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to concentrate'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Short -term planning'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Initiative'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Emotionality in work'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Abuse of influence on other people to achieve their own goals'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Orientation on the result'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The need for the approval of the leadership (\'praise me\')'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The desire for separatism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Protection of the interests of subordinates before the leadership'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The desire to be the head of the family'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Desire for financial independence'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Conflict Management'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Willingness to sacrifice others for a good goal'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Ambitiousness'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Readiness to make the consequences of decisions made'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['The ability to obey if necessary'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Active participation in activities'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['A tendency to distance from the team'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Hard work'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Stress resistance'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Orientation to the process'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Careerism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Readiness \'go on the head\''][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Oppositionist'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Perfectionism'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Attitude to money and resources'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #9ede39;"></i><span><?= $data['Excessive resource consumption'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46">Создание собственных KYC репортов</h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">Как и для Youmee HR, в рамках решений Youmee KYC мы предоставляем возможность создания неограниченного количества собственных репортов с привязкой к конкретным целям анализа.</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">При создании Шаблона, Вы можете указать приоритетность параметров анализа, их весовые значения, влияющие на общий скоринг контрагента, а также настроить параметры-«стопперы». Если ядро технологии выдает неудовлетворительный результат параметра, который вы определили как «стоппер», контрагент получит неудовлетворительный результат скоринга в обход общему установленному алгоритму.</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">Тот же принцип работает и в отношении параметров-«бустеров»: в случае получения максимального результата по ним контрагент получит положительный результат скоринга в обход общему установленному алгоритму.</p>

                <h6>Как создать собственный репорт</h6>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">1. <b>Создайте собственный шаблон репорта для должности:</b> выберите те параметры, которые вы считаете наиболее важными для сегментации.</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">2. <b>Задайте те значения по параметрам, которые для кандидата будут считаться «хорошими» и «проходными».</b> В дальнейшем система будет сопоставлять фактически значения результатов анализа кандидатов с установленными вами.</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">3. <b>Запустите анализ контрагентов по созданному вами репорту</b></p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">4. Фильтруйте по отдельным параметрам, экспортируйте в удобном формате, редактируйте созданный вами шаблон для получения более релевантного результата или запустите передачу полученных данных через API в другие системы Вашей инфраструктуры.</p>
            </div>
        </div>
    </div>

<?php include('footer.php') ?>