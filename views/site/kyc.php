<?php include('header.php')?>

    <div class="container-fluid firstContainer" style="min-height: 450px">
        <div id="particles-js" style="height: 450px"></div>
        <div class="container row d-flex m-0 mx-auto px-0" style="padding-top: 155px">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
                <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: #003C46"><?= $data['KYC Модули'][$lang]?>
</span></h1>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Если у вас большая клиентская база, а бизнес-процессы требуют обязательной верификации пользователей, - Вы наверняка уже внедрили или приняли решение по внедрению системы типа KYC (Know Your Customer). Они используются для подтверждения контрагентов перед проведением финансовых операций и широко применимы в следующих индустриях:'][$lang];?>
                    </p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
                <img src="/images/kyc.png" alt="" width="250">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="row d-flex">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                        <img src="/images/fintech.png" alt="" width="120px">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                        <h4 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['FinTech (финансовые организации, банки)'][$lang]?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="row d-flex">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                        <img src="/images/gambling.png" alt="" width="120px">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                        <h4 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['Индустрия игр и развлечений'][$lang]?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="row d-flex">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                        <img src="/images/med_insurance.png" alt="" width="120px">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                        <h4 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['Сфера страхования и медицины'][$lang]?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="row d-flex">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                        <img src="/images/e-commerce.png" alt="" width="120px">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                        <h4 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['Электронная коммерция и шеринговые компании'][$lang]?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row mx-auto px-0 d-flex">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="text-align: start; background-color: white; border-radius: 10px; padding: 15px; padding-right: 30px!important">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-start mb-4">
                    <img src="/images/kyc_options.png" alt="" width="70px" height="70px">
                    <h5 style="margin-left: 20px; color: #003C46; align-self: center; margin-bottom: 0;"><?= $data['Основные этапы'][$lang]?>
                        <br> <?= $data['процессинга информации в рамках KYC'][$lang]?>
                    </h5>
                </div>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500; color: #003C46">1.</span> <?= $data['Обработка документа'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500; color: #003C46">2.</span> <?= $data['Сбор биометрической информации в рамках фото и видео съемки'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500; color: #003C46">3.</span> <?= $data['Сопоставление фото с документом (FaceMatching)'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500; color: #003C46">4.</span> <?= $data['Проверка по AML (Anti-Money Laundering) и другим базам'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500; color: #003C46">5.</span> <?= $data['(в некоторых случаях) обеспечение OTP входа в сервис через биометрическую верификацию лица клиента'][$lang]?>
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-start" style="text-align: start; background-color: rgba(75, 173, 233, 0.2);; border-radius: 10px; padding: 15px; padding-left: 30px!important">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-start mb-5">
                    <h5 style="color: #003C46"><?= $data['Какие задачи решает внедренная KYC система'][$lang]?>
                    </h5>
                </div>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus me-3" style="color: #003C46;"></i><?= $data['Защита от мошенников'][$lang]?>
                    <span style="color: red; font-size: 25px">*</span></p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus me-3" style="color: #003C46;"></i><?= $data['Ускорение верификации клиента'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus me-3" style="color: #003C46;"></i><?= $data['Упрощенный вход в сервис'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus me-3" style="color: #003C46;"></i><?= $data['Исключение ошибок и опечаток'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus me-3" style="color: #003C46;"></i><?= $data['Проверка возраста клиента'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-plus me-3" style="color: #003C46;"></i><?= $data['Защита от попыток взлома'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="color: red; font-size: 25px">*</span><?= $data['только на основании имеющихся баз данных'][$lang]?>
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-start mb-5">
                <h1 style="color: #003C46"><?= $data['Чего'][$lang]?>
                    <span style="color: #ff2600"><?= $data['ни одна KYC система'][$lang]?>
</span><?= $data[' в мире дать вам не сможет:'][$lang]?>
                </h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                <div class="row d-flex">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-start" style="text-align: start;">
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark me-3" style="color: #ff2600;"></i><?= $data['Определение целевого клиента уже на этапе верификации'][$lang]?>
                        </p>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark me-3" style="color: #ff2600;"></i><?= $data['Предиктивный анализ поведения клиента в вашей системе'][$lang]?>
                        </p>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark me-3" style="color: #ff2600;"></i><?= $data['Отраслевой скоринг рисков (разработанный под требования Вашей отрасли)'][$lang]?>
                        </p>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark me-3" style="color: #ff2600;"></i><?= $data['Сегментация клиентов для повышения эффективности маркетинговой стратегии'][$lang]?>
                        </p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-start" style="text-align: start;">
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark me-3" style="color: #ff2600;"></i><?= $data['Интеллектуальные и психологические особенности клиента'][$lang]?>
                        </p>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark me-3" style="color: #ff2600;"></i><?= $data['Предрасположенность к мошенничеству'][$lang]?>
                        </p>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark me-3" style="color: #ff2600;"></i><?= $data['Отношение к деньгам и долговым обязательствам'][$lang]?>
                        </p>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><i class="fa-solid fa-circle-xmark me-3" style="color: #ff2600;"></i><?= $data['любые другие репорты, получаемые на основании личной информации о характере человека'][$lang]?>
                        </p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-start mb-5">
                    <p class="" style="font-size: 19px;color: #003C46;"><b><?= $data['Но все это может дать интеграция Вашей KYC системы с Youmee KYC'][$lang]?>
                        </b><?= $data[' – модулем предиктивного анализа контрагента, который работает на базе технологии Mizagene.'][$lang]?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46;"><?= $data['Примеры параметров, которые вы получите'][$lang]?>
                </h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-between mb-5">
                <p class="text-center" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Ниже предлагаем Вашему вниманию часть параметров, используемых для анализа рисков и повышения маркетинговой эффективности в сфере «игр и развлечений»'][$lang]?>
                </p>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-between mb-5">
                <ul class="analysis-pill nav nav-pills nav-justified mb-5 flex-column flex-sm-row" id="pills-tab" role="tablist">
                    <li class="nav-item d-flex" role="presentation">
                        <button style="border-radius: 5px 0px 0px 5px!important" class="nav-link active" id="pills-1" data-bs-toggle="pill" data-bs-target="#pills-tab-1" type="button" role="tab" aria-controls="pills-tab-1" aria-selected="true"><?= $data['Черты характера'][$lang]?>
                        </button>
                    </li>
                    <li class="nav-item d-flex" role="presentation">
                        <button class="nav-link" id="pills-2" data-bs-toggle="pill" data-bs-target="#pills-tab-2" type="button" role="tab" aria-controls="pills-tab-2" aria-selected="true"><?= $data['Интеллект'][$lang]?>
                        </button>
                    </li>
                    <li class="nav-item d-flex" role="presentation">
                        <button class="nav-link" id="pills-3" data-bs-toggle="pill" data-bs-target="#pills-tab-3" type="button" role="tab" aria-controls="pills-tab-3" aria-selected="true"><?= $data['Зависимости'][$lang]?>
                        </button>
                    </li>
                    <li class="nav-item d-flex" role="presentation">
                        <button class="nav-link" id="pills-4" data-bs-toggle="pill" data-bs-target="#pills-tab-4" type="button" role="tab" aria-controls="pills-tab-4" aria-selected="true"><?= $data['Отношение к деньгам и ресурсам'][$lang]?>
                        </button>
                    </li>
                    <li class="nav-item d-flex" role="presentation">
                        <button style="border-radius: 0px 5px 5px 0px!important" class="nav-link" id="pills-6" data-bs-toggle="pill" data-bs-target="#pills-tab-6" type="button" role="tab" aria-controls="pills-tab-6" aria-selected="true"><?= $data['Закон'][$lang]?>
                        </button>
                    </li>
                    <li class="nav-item d-flex" role="presentation">
                        <button style="border-radius: 0px 5px 5px 0px!important" class="nav-link" id="pills-7" data-bs-toggle="pill" data-bs-target="#pills-tab-7" type="button" role="tab" aria-controls="pills-tab-7" aria-selected="true"><?= $data['Психика и неврология'][$lang]?>
                        </button>
                    </li>
                    <li class="nav-item d-flex" role="presentation">
                        <button style="border-radius: 0px 5px 5px 0px!important;" class="nav-link" id="pills-8" data-bs-toggle="pill" data-bs-target="#pills-tab-8" type="button" role="tab" aria-controls="pills-tab-8" aria-selected="true"><?= $data['Игра'][$lang]?>
                        </button>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-tab-1" role="tabpanel" aria-labelledby="pills-tab-1" tabindex="0">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Экстраверсия'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Интроверсия'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Смелость'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Храбрость'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Упорство'][$lang]?></span></div>

                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Настойчивость'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Соблюдение договоренностей'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Расчетливость'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Терпение'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Решительность'][$lang]?></span></div>

                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['Сила воли (в борьбе с соблазнами)'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Сила воли (в достижении поставленных целей)'][$lang]?></span></div>
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['Сила воли (при приложении физических усилий)'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Жадность'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Зависть'][$lang]?></span></div>

                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Максимализм'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Фатализм'][$lang]?></span></div>
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['Склонность обвинять других в собственных проблемах'][$lang]?></span></div>
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['Чувство вины (брать вину на себя за свои и чужие ошибки)'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Верность принципам и убеждениям'][$lang]?></span></div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-2" role="tabpanel" aria-labelledby="pills-tab-2" tabindex="1">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['The level of intellectual development (IQ)'][$lang] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Emotional intelligence (EQ)'][$lang] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Spatial intelligence'][$lang] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Mathematical intelligence'][$lang] ?></span></div>
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['Financial intelligence (talent to earn money in comparison with the most successful people)'][$lang] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Combinatorics, gaming intelligence'][$lang] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Social intelligence'][$lang] ?></span></div>
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['Talent for deception, falsification and fraud'][$lang] ?></span></div>
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['A dodgy mind (a mindset that allows you to find a lot of solutions and opportunities at once)'][$lang] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Non -standard solutions'][$lang] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Analytic mind'][$lang] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Structural thinking'][$lang] ?></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-3" role="tabpanel" aria-labelledby="pills-tab-3" tabindex="2">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Игромания (гемблинг, лудомания)'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к алкогольной зависимости'][$lang]?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к наркотической зависимости (легкие наркотики)'][$lang]?></span></div>
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к наркотической зависимости (тяжелые наркотики)'][$lang]?></span></div>

                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Адреналиновая зависимость'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Зависимость от мнения супруга/супруги'][$lang]?></span></div>
                           </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['Зависимость от мнения общества'][$lang]?></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-4" role="tabpanel" aria-labelledby="pills-tab-4" tabindex="3">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Стремление к роскоши'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Стремление к быстрому обогащению'][$lang]?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Расточительство'][$lang] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Чрезмерное потребление ресурсов'][$lang] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Спонтанные покупки'][$lang] ?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Умение распоряжаться деньгами'][$lang] ?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Умение торговаться'][$lang] ?></span></div>
                                <div class="d-flex align-items-start "><i class="fa-solid fa-circle-check mt-2 me-2" style="color: #003C46!important"></i><span><?= $data['Талант к накопительству'][$lang] ?></span></div>
                              </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-6" role="tabpanel" aria-labelledby="pills-tab-6" tabindex="5">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Следование закону (может ли человек преступить закон в случае необходимости)'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность преступить закон с целью быстрого обогащения'][$lang]?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Талант к обману, фальсификации и мошенничеству'][$lang]?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Вероятность незаконного использования дополнительного программного обеспечения'][$lang]?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к нечестной игре'][$lang]?></span></div>
                            </div>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-7" role="tabpanel" aria-labelledby="pills-tab-7" tabindex="6">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Психическая выносливость'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Физическая выносливость'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к меланхолии'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к психопатии'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к социопатии'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к эпилепсии'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к быстрому эмоциональному выгоранию'][$lang]?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Невротизм'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Эмоциональная уязвимость'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Нервная возбудимость'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Контроль импульсов (умение сопротивляться спонтанным желаниям)'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Одержимость идеей'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к не желаемому одиночеству'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к тоске (душевной тревоге в совокупности с грустью и скукой)'][$lang]?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к самоуничижению (неудовлетворенность собой)'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Самооценка'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Бегство от проблем'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Эмоциональная пустота'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Упрямство (иррациональное настаивание на своем мнении)'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Лень'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Склонность к мистицизму (вера в потусторонние силы, символы)'][$lang]?></span></div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Принятие решения на основе веры в потусторонние силы и влияния символизма'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Склонность к сублимации эмоций в какую-то деятельность'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Уязвимость по причине презрения других в отношении себя'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Внушаемость'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Скорость доведения до состояния раздражительности (вспыльчивость)'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Скорость доведения до состояния гнева'][$lang]?></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Скорость доведения до состояния аффекта'][$lang]?></span></div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-tab-8" role="tabpanel" aria-labelledby="pills-tab-8" tabindex="7">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Азарт'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Авантюризм'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Принятие риска'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Талант считать карты'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Усидчивость'][$lang]?></span></div>

                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Чувство меры в игре (контроль жадности, умение вовремя остановиться, оказавшись в плюсе)'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Чувство меры в игре (контроль над желанием отыграться, оказавшись в глубоком минусе)'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Желание форсировать ход игры (игра ва-банк)'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Восприимчивость к визуальным манипуляциям, сулящим выгоду'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Восприимчивость к звуковым манипуляциям, сулящим выгоду'][$lang]?></span></div>

                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Дисциплина в игре (следование заранее составленному плану)'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Импульсное поведение во время игры'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Отношение к необходимости принятия решения в условиях ограниченного времени'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к аркадным играм'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к беттингу'][$lang]?></span></div>

                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к онлайн слотам'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к карточным играм'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к осторожной игре'][$lang]?></span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: #003C46!important"></i><span><?= $data['Предрасположенность к крупным ставкам'][$lang]?>   </span></div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46"><?= $data['Как это работает'][$lang]?>
                </h1>
            </div>
            <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex mb-5" style="text-align: start">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex">
                    <img src="/images/1analysis.svg" alt=""style="width: 120px; height: 120px">
                    <div style="align-self: center; margin-left: 30px;">
                        <h5><?= $data['Этап первичного анализа'][$lang]?>
                        </h5>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Определение характера человека, его талантов, моделей поведения, способностей и предпочтений, а также предрасположенности к психическим заболеваниям и страстям'][$lang]?>
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-3 d-flex">
                    <img src="/images/2analysis.svg" alt=""style="width: 120px; height: 120px">
                    <div style="align-self: center; margin-left: 30px;">
                        <h5><?= $data['Итоговая обработка данных'][$lang]?>
                        </h5>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Обработка полученных на этапе первичного анализа данных с учетом специфики бизнеса Заказчика, его требований и утвержденных алгоритмов'][$lang]?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <img src="/images/new_report.png" alt="" width="50px" height="50px" style="margin-right: 20px; align-self: center">
                <h1 style="color: #003C46"><?= $data['Создание собственных KYC репортов'][$lang]?>
                </h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="padding-right: 30px!important; background-color: rgba(75, 173, 233, 0.2); border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Как и для Youmee HR, в рамках решений Youmee KYC мы предоставляем '][$lang]?>
                    <span style="color: #003C46;font-weight: 500"><?= $data['возможность создания неограниченного количества собственных репортов'][$lang]?>
</span> <?= $data['с привязкой к конкретным целям анализа.'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['При создании Шаблона, Вы можете указать приоритетность параметров анализа, их весовые значения, влияющие на общий скоринг контрагента, а также настроить параметры-«стопперы».'][$lang]?>
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="padding-left: 30px; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Если ядро технологии выдает неудовлетворительный результат параметра, который вы определили как «стоппер», контрагент получит неудовлетворительный результат скоринга в обход общему установленному алгоритму.'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Тот же принцип работает и в отношении параметров-«бустеров»: в случае получения максимального результата по ним контрагент получит положительный результат скоринга в обход общему установленному алгоритму.'][$lang]?>
                </p>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-3 mt-3">
                <h3 style="color: #003C46"><?= $data['Как создать собственный репорт'][$lang]?>
                </h3>
            </div>
            <div class="row mx-auto px-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex" style="text-align: start">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="background-color: white; border-radius: 10px; padding: 15px; padding-left: 30px!important">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="color: #003C46;font-weight: 500">1.</span> <?= $data['Создайте собственный шаблон репорта для должности: выберите те параметры, которые вы считаете наиболее важными для сегментации.'][$lang]?>
                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="color: #003C46;font-weight: 500">2.</span> <?= $data['Задайте те значения по параметрам, которые для кандидата будут считаться «хорошими» и «проходными». В дальнейшем система будет сопоставлять фактически значения результатов анализа кандидатов с установленными вами.'][$lang]?>
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="background-color: rgba(75, 173, 233, 0.2); border-radius: 10px; padding: 15px; padding-left: 30px!important">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="color: #003C46;font-weight: 500">3.</span> <?= $data['Запустите анализ контрагентов по созданному вами репорту'][$lang]?>
                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="color: #003C46;font-weight: 500">4.</span> <?= $data['Фильтруйте по отдельным параметрам, экспортируйте в удобном формате, редактируйте созданный вами шаблон для получения более релевантного результата или запустите передачу полученных данных через API в другие системы Вашей инфраструктуры.'][$lang]?>
                    </p>
                </div>
                </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46"><?= $data['Безопасность храниния данных'][$lang]?>
                </h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px">
                        <h3 style="color: #003C46"><?= $data['Только обезличенные данные'][$lang]?>
                        </h3>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Для обезличенных данных о лице субъекта (координаты контрольных точек и их расстояние относительно друг друга) используется тот же программный код на базе AI, что и при создании визуальных эффектов наложения. Это решение было продиктовано необходимостью быть максимально «прозрачными» в случае использования нашей Технологии с размещением части программного кода на серверах корпоративных пользователей.'][$lang]?>
                        </p>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-left: 30px">
                        <h3 style="color: #003C46"><?= $data['Варианты поствки ПО'][$lang]?>
                        </h3>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['В зависимости от размеров компаний, а также целей, которые они преследуют, для корпоративных решений мы предоставляем 2 варианта поставки технологии:'][$lang]?>
                        </p>
                        <p class="mb-0" style="font-size: 19px;color: rgb(114, 114, 114);">1.  <span style="font-weight: 400; color: #003C46">API</span>. <?= $data['Клиент или Партнер интегрирует нашу систему со своим программным обеспечением и получает результаты скоринга прямо в нем.'][$lang]?>
                        </p>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">2.  <span style="font-weight: 400; color: #003C46">SDK (software development kit)</span>, <?= $data['инсталлируется на сервере Клиента.'][$lang]?>
                        </p>

                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                    <img src="/images/picture_total_kyc.png" alt="" style="width: 100%">
                </div>
                <p style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Фотографии субъектов анализа остаются на этом сервере без передачи нам. SDK от Youmee  передает всю необходимую, но при этом обезличенную информацию о контрагенте в виде JSON файла с координатами контрольных точек на лице. Результаты анализа посредством API передаются в систему Клиента.'][$lang]?>
                </p>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="container row mx-auto px-0" style="text-align: start; background-color: rgba(75, 173, 233, 0.2); border-radius: 10px; padding: 15px;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-3">
                <h1 style="color: #003C46"><?= $data['Клиентский отдел2'][$lang]?>
                </h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><?= $data['Готовы сделать первый шаг к сотрудничеству? Заполните форму ниже, выберите формат и в поле «комментарий» напишите суть вашего запроса. Мы оперативно свяжемся с Вами и обсудим все возможные варианты сотрудничества.'][$lang]?>
                </p>
            </div>

            <!--            <form method="post" action="/site/become-partners">-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="text-align: start">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><?= $data['Имя Фамилия*'][$lang]?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?= $newStr = substr($data['Имя Фамилия*'][$lang], 0, -1);?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label"><?= $data['Должность*'][$lang]?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="<?= $newStr = substr($data['Должность*'][$lang], 0, -1);?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label"><?= $data['Название компании*'][$lang]?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="<?= $newStr = substr($data['Название компании*'][$lang], 0, -1);?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput4" class="form-label"><?= $data['Сайт компании*'][$lang]?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="<?= $newStr = substr($data['Сайт компании*'][$lang], 0, -1);?>" required>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="text-align: start">
                <div class="mb-3">

                    <label for="exampleFormControlInput5" class="form-label"><?= $data['Продукт Youmee'][$lang]?>*</label>
                    <select class="form-select" aria-label="Тип сотрудничества*">
                        <option value="1">Youmee KYC</option>
                        <option value="2">Youmee HR</option>
                    </select>
                    <!--                        <label for="exampleFormControlInput5" class="form-label">Тип сотрудничества*</label>-->
                    <!--                        <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="Тип сотрудничества">-->
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput6" class="form-label"><?= $data['Страна*'][$lang]?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput6" placeholder="<?= $newStr = substr($data['Страна*'][$lang], 0, -1);?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput7" class="form-label"><?= $data['Телефон*'][$lang]?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput7" placeholder="<?= $newStr = substr($data['Телефон*'][$lang], 0, -1);?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput8" class="form-label"><?= $data['Email address*'][$lang]?>
                    </label>
                    <input type="email" class="form-control" id="exampleFormControlInput8" placeholder="name@example.com" required>
                </div>
            </div>


            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="text-align: start">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><?= $data['Комментарий*'][$lang]?>
                    </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
            </div>

            <div class="row col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3 d-flex justify-content-center" style="text-align: start; margin-top: auto">
                <div class="mb-3 w-100">
                    <button class="btn fillGreenButton w-100"><?= $data['Отправить'][$lang]?></button>
                </div>
            </div>
            <!--            </form>-->
        </div>
    </div>



<?php include('footer.php') ?>