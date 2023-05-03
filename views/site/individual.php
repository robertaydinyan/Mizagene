<?php include('header.php')?>

    <div class="container-fluid firstContainer" style="min-height: 450px">
        <div id="particles-js" style="height: 450px"></div>
        <div class="container row d-flex m-0 mx-auto px-0" style="padding-top: 155px">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
                <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: rgba(0, 177, 243)"><?= $data['solutions1'][$lang] ?></span></h1>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">    <?= $data['Сервис Youmee Tech открывает удивительные возможности для понимания себя и окружающих.'][$lang]?>
                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Система предоставит исчерпывающую информацию об особенностях личности, а в случае, а если на параметр влияет не только субъект анализа, но и другой человек (партнер, супруг, родитель, ребенок, коллега), - этот параметр рассчитывается с учетом влияния обоих.'][$lang]?>
                    </p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
                <img src="/images/individual.png" alt=""width="250">
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h2 style="color: rgba(0, 177, 243)"><?= $data['Возможности системы'][$lang]?>
                </h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px!important; background-color: rgba(0, 177, 243, 0.2); border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                    <?= $data['Выберите тарифный план или воспользуйтесь бесплатным пробным периодом.'][$lang]?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                    <?= $data['Пробный период включает в себя доступ на 1 месяц или анализ 3 субъектов на выбор. Из перечня репортов по умолчанию Вам будет предоставлен доступ к расширенной версии «Основного» репорта для каждого субъекта.'][$lang]?>
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start;padding-left: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                    <?= $data['Также Вы можете указать связи между субъектами. Например, субъект анализа Дженифер – мама субъекта анализа Элен. На основании установленной Вами связи Система логически заключит, что Элен – дочь Дженифер, и сгенерирует:

                    а) репорт «Я и родители» в карточке Элен

                    б) репорты подгруппы «Ребенок» (те из них, которые соответствуют возрасту Элен) в карточке Дженифер'][$lang]?>


                </p>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4" style="text-align: start;padding-left: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                    <?= $data['Также вы можете делиться результатами репортов в социальных сетях. Ваши контакты, перейдя по публичной ссылке получат доступ только к опубликованному Вами репорту.'][$lang]?>

                    <span style="font-weight: 500; color: rgba(0, 177, 243)"><?= $data['Важно!'][$lang]?>
</span> <?= $data['Любую ответственность за публикацию репортов, не относящихся только к вам как к субъекту анализа лично, Вы публикуете, под личную ответственность, подтверждая, что реальный субъект анализа опубликованного репорта был надлежащим образом осведомлен и/или не возражает. Сервис Youmee Tech не несет ответственности за юридические или иные последствия неправомерной публикации результатов анализа на основании данных о третьих лицах с Вашей стороны.'][$lang]?>

                </p>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h2 style="color: rgba(0, 177, 243)"><img src="/images/youmee_me.png" alt="" width="70px" style="margin-right: 20px"><span class="text-dark">Youmee</span> Me</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <img src="/images/me_back.jpg" alt="" width="100%">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start;padding-left: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                    <?= $data['Для индивидуальных пользователей доступны или находятся на завершающей стадии подготовки следующие репорты'][$lang]?>
                    <span style="color: rgba(0, 177, 243)">Youmee Me</span>:
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                    <span style="color: rgba(0, 177, 243)">1.</span>	<?= $data['Я и мой темперамент'][$lang]?>
                    <br>
                    <span style="color: rgba(0, 177, 243)">2.</span>	<?= $data['Я и мои родители'][$lang]?>
                    <br>
                    <span style="color: rgba(0, 177, 243)">3.</span>	<?= $data['Я и спорт'][$lang]?>
                    <br>
                    <span style="color: rgba(0, 177, 243)">4.</span>	<?= $data['Я и мои таланты'][$lang]?>
                    <br>
                    <span style="color: rgba(0, 177, 243)">5.</span>	<?= $data['Я и наука'][$lang]?>
                    <br>
                    <span style="color: rgba(0, 177, 243)">6.</span>	<?= $data['Я и мои эмоции'][$lang]?>
                    <br>
                    <span style="color: rgba(0, 177, 243)">7.</span>	<?= $data['Я как лидер'][$lang]?>
                    <br>
                    <span style="color: rgba(0, 177, 243)">8.</span>	<?= $data['Моя эффективность'][$lang]?>
                    <br>
                    <span style="color: rgba(0, 177, 243)">9.</span>	<?= $data['Я и коммуникация'][$lang]?>
                    <br>
                    <span style="color: rgba(0, 177, 243)">10.</span>	<?= $data['Я и конфликты'][$lang]?>
                    <br>
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid firstContainer mb-5" style="min-height: 150px; background: rgba(0, 177, 243, 0.2)">
        <div class="container-fluid d-grid d-md-block col-12 mx-auto text-center" style="margin: 0!important; margin-top: 2rem!important; padding: 0!important; z-index: 10; position: absolute; top: 20px">
            <button class="btn fillBlueButton mx-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][$lang] ?></button>
        </div>
    </div>

    <div class="container mt-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: rgb(234, 51, 61)"><img src="/images/youmee_family.png" alt="" width="70px" style="margin-right: 20px"><span class="text-dark">Youmee</span> Family</h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start;padding-left: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                    <span style="color: rgb(234, 51, 61)">Youmee Family</span> <?= $data['– комплексный пакет репортов, который позволит Вам разобраться в Ваших взаимоотношениях с родителями и семьей, а главное, сэкономить время и нервы Вам и Вашему ребенку, спланировав его развитие на основании его врожденных талантов и способностей.'][$lang]?>

                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <img src="/images/family_back.jpg" alt="" width="100%">
            </div>
            <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 pe-1">
                    <p class="" style="font-size: 19px;color: rgb(234, 51, 61);">
                        <?= $data['Подгруппа «Супружеские отношения»'][$lang]?>

                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                        <span style="color: rgb(234, 51, 61)">1.</span>	<?= $data['Мое отношение к семье'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">2.</span>	<?= $data['Природа и темперамент моей (моего) супруги (-а)'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">3.</span>	<?= $data['Совместимость с супругой (-ом)'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">4.</span>	<?= $data['Семейный быт'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">5.</span>	<?= $data['Мой сексуальный темперамент'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">6.</span>	<?= $data['Сексуальные отношения с супругой (-ом)'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">7.</span>	<?= $data['Конфликты: вероятность и причины'][$lang]?>
                        <br>
                    </p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 p-1">
                    <p class="" style="font-size: 19px;color: rgb(234, 51, 61);">
                        <?= $data['Подгруппа «Родители»'][$lang]?>

                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                        <span style="color: rgb(234, 51, 61)">1.</span>	<?= $data['Я и моя мама'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">2.</span>	<?= $data['Я и мой папа'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">3.</span>	<?= $data['Я и мой тесть / свекор'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">4.</span>	<?= $data['Я и моя теща / свекровь'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">5.</span>	<?= $data['Мой (моя) супруг(-а) и моя мама'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">6.</span>	<?= $data['Мой (моя) супруг(-а) и мой папа'][$lang]?>
                        <br>
                    </p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 p-1">
                    <p class="" style="font-size: 19px;color: rgb(234, 51, 61);">
                        <?= $data['Подгруппа «Ребенок»'][$lang]?>

                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                        <span style="color: rgb(234, 51, 61)">1.</span>	<?= $data['Природа и темперамент моего ребенка'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">2.</span>	<?= $data['Таланты моего ребенка'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">3.</span>	<?= $data['Мой ребенок и обучение'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">4.</span>	<?= $data['Мой ребенок и врожденное здоровье'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">5.</span>	<?= $data['Мой ребенок и спорт'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">6.</span>	<?= $data['Мой ребенок и наука'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">7.</span>	<?= $data['Мой ребенок и школа'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">8.</span>	<?= $data['Мой ребенок и университет'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">9.</span>	<?= $data['Мой ребенок и переходный период'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">10.</span><?= $data['Мой ребенок и сверстники'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">11.</span><?= $data['Мой ребенок и психического здоровье'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">12.</span><?= $data['Мой ребенок и мотивация'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">13.</span><?= $data['Мой ребенок и конфликты'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">14.</span><?= $data['Мой ребенок и братья/сестры'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">15.</span><?= $data['Мой ребенок и супружество'][$lang]?>
                        <br>

                    </p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ps-1">
                    <p class="" style="font-size: 19px;color: rgb(234, 51, 61);">
                        <?= $data['Подгруппа «Братья и сестры»'][$lang]?>

                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                        <span style="color: rgb(234, 51, 61)">1.</span><?= $data['Его (ее) природа и темперамент'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">2.</span>	<?= $data['Я и мой (моя) брат (сестра)'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">3.</span>	<?= $data['Он (она) и наши родители'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">4.</span>	<?= $data['Его (ее) отношение к семье'][$lang]?>
                        <br>
                    </p>
                    <p class="" style="font-size: 19px;color: rgb(234, 51, 61);">
                        <?= $data['Подгруппа «Дом и комфорт»'][$lang]?>

                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                        <span style="color: rgb(234, 51, 61)">1.</span><?= $data['Выбор домашнего питомца'][$lang]?>
                        <br>
                        <span style="color: rgb(234, 51, 61)">2.</span>	<?= $data['Домашний уют'][$lang]?>
                        <br>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid firstContainer mb-5" style="min-height: 150px; background: rgba(234, 51, 61, 0.2)">
        <div class="container-fluid d-grid d-md-block col-12 mx-auto text-center" style="margin: 0!important; margin-top: 2rem!important; padding: 0!important; z-index: 10; position: absolute; top: 20px">
            <button class="btn fillRedButton mx-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][$lang] ?></button>
        </div>
    </div>

    <div class="container mt-3 mb-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h2 style="color: rgba(0, 177, 243)"><img src="/images/youmee_verse.png" alt="" width="50px" style="margin-right: 20px"><span style="color: rgb(210, 58, 225)"><span class="text-dark">Youmee</span> Verse</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <img src="/images/verse_back.jpg" alt="" width="100%">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start;padding-left: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                    <?= $data['Так много всего хочется узнать о ваших друзьях, коллегах и любимых? Пакет репортов'][$lang]?>
                    <span style="color: rgb(210, 58, 225)">Youmee Verse</span> <?= $data['– лучшее решение. Налаживайте взаимоотношения с людьми в два клика. Youmee Tech предоставит совместные репорты, в которых учтены не только природа и темперамент субъектов анализа, но и берется в расчет Ваш характер. '][$lang]?>
                    <span style="color: rgb(210, 58, 225)">Youmee Verse</span> <?= $data['– это дорожная карта эффективной коммуникации с людьми. Окружающими вас!'][$lang]?>

                </p>
            </div>
            <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 pe-1">
                    <p class="" style="font-size: 19px;color: rgb(210, 58, 225);">
                        <?= $data['Группа репортов №1: «Я и друзья»'][$lang]?>

                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                        <span style="color: rgb(210, 58, 225)">1.</span>	<?= $data['Природа и темперамент моего (моей) друга (подруги)'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">2.</span>	<?= $data['Совместимость с другом (подругой)'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">3.</span>	<?= $data['Влияние других на ваши отношения с другом (подругой)'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">4.</span>	<?= $data['Дружба и бизнес'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">5.</span>	<?= $data['Конфликты: вероятность и причины'][$lang]?>
                        <br>
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 p-1">
                    <p class="" style="font-size: 19px;color: rgb(210, 58, 225);">
                        <?= $data['Группа репортов №2: «Мои интимные отношения»'][$lang]?>

                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                        <span style="color: rgb(210, 58, 225)">1.</span><?= $data['Природа и темперамент партнера'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">2.</span>	<?= $data['Взаимоотношения с партнером'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">3.</span>	<?= $data['Моя интимная жизнь с партнером'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">4.</span>	<?= $data['Наша совместимость с партнером'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">5.</span>	<?= $data['Быт с партнером'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">6.</span>	<?= $data['Конфликты с партнером: вероятность и причины'][$lang]?>
                        <br>
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 p-1">
                    <p class="" style="font-size: 19px;color: rgb(210, 58, 225);">
                        <?= $data['Группа репортов №3: «Я и мои коллеги»'][$lang]?>

                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                        <span style="color: rgb(210, 58, 225)">1.</span>	<?= $data['Природа и темперамент моих коллег'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">2.</span>	<?= $data['Я и руководитель'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">3.</span>	<?= $data['Я и подчиненный'][$lang]?>
                        <br>
                        <span style="color: rgb(210, 58, 225)">4.</span>	<?= $data['Я и коллега'][$lang]?>
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid firstContainer" style="min-height: 150px; background: rgba(210, 58, 225, 0.2)">
        <div class="container-fluid d-grid d-md-block col-12 mx-auto text-center" style="margin: 0!important; margin-top: 2rem!important; padding: 0!important; z-index: 10; position: absolute; top: 20px">
            <button class="btn fillPurpleButton mx-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="margin-left: 0!important;"><?= $data['button1'][$lang] ?></button>
        </div>
    </div>

<?php include('footer.php') ?>