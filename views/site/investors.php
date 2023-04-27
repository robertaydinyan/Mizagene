<?php include('header.php')?>

<div class="container-fluid firstContainer" style="min-height: 450px">
    <div id="particles-js" style="height: 450px"></div>
    <div class="container row mx-auto px-0 d-flex" style="padding-top: 155px">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
            <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: #003C46"><?= $data['subtitle3'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></h1>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Команда Youmee Technologies предлагает Вам инвестировать в отраслевые продукты на базе технологии Mizagene. Сферы применения технологии самые разнообразные и затрагивают как B2B рынок, так и B2C.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Но главное, наша уникальная запатентованная технология Mizagene не имеет равноценных и сопоставимых в точности результата аналогов.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
            <img src="/images/protection.png" alt=""width="250">
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="container row mx-auto px-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['Уникальные продукты'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </h1>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Самые значимые технологии будущего лежат под пылью прошлого. Мы сдуваем эту пыль.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Конечно, аналитические продукты на базе ИИ распознавания лица – не новость. Более того, мы и сами используем сторонние решения на базе AI.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
            <p style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Но суть технологии не в применяемом искусственном интеллекте, а в аналитическом ядре, способном обработать координаты контрольных точек и дать отчет на более чем 1500 параметров.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
            <div class="callout callout-success">
                <?= $data['Иными словами, - получить контрольные точки на лице могут многие, но только мы знаем, что они означают и как их анализировать.'][isset($_GET['lang']) ? 'en' : 'ru']?>

            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
            <img src="/images/face_collage.png" style="width: 100%">
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="container row mx-auto px-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['Почему технология сегодня актуальна как никогда'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </h1>
        </div>
        <div class="row mx-auto px-0">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                <img src="/images/people.jpeg" alt="" style="width: 75%">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Мир сегодня перенасыщен информацией и переживает четвертую технологическую революцию, которая сопровождается как новыми возможностями, так и вытекающими из нее цивилизационными вызовами. Основные из них – это глобализация, интеграция и деперсонализация личности.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Для бизнеса – это необходимость адаптировать процессы в условиях цифрового и информационного бума, динамично меняющихся «правил игры», а также высокой конкуренции как на рынке в целом, так и на рынке труда в частности.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Несмотря на общую тенденцию, мы убеждены, что любые, самые глобальные задачи в конечном итоге выполняются людьми, имеющими свои характер, «потолок возможностей», индивидуальное восприятие мира и т.д.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                <div class="callout callout-success">
                    <?= $data['И если социальная инженерия – это совокупность технологий для достижения целей манипулирования общественным мнением без учета мнения отдельно взятой единицы, то '][isset($_GET['lang']) ? 'en' : 'ru']?>
                    <span style="font-weight: 500; color: #003C46"><?= $data['наши решения – это своего рода'][isset($_GET['lang']) ? 'en' : 'ru']?>
                     <span style="font-weight: 500; color: rgb(210, 58, 225);"><?= $data['дешифратор'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </span> <?= $data['для предиктивного SWOT анализа'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </span><?= $data[', позволяющий идентифицировать сильные и слабые стороны, выявить возможности и угрозы на уровне личности.'][isset($_GET['lang']) ? 'en' : 'ru']?>

                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Польза от такого подхода отнюдь не виртуальная и выражается в конкретных цифрах.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Например, превентивные меры по упреждению случаев промышленного шпионажа или снижение показателя оттока кадров среди инженеров на заводе уровня «Мерседес Бенс» благодаря персонализированному подходу к сотруднику не просто экономит бюджет компании на привлечение, обучение и длительную адаптацию нового специалиста, но и может упредить риски и сопутствующие им издержки в миллионы долларов.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Приблизительно то же самое обстоит и с клиентской базой. Например, игровая онлайн платформа типа «онлайн казино», использующая процессы верификации клиентов (KYC), за счет эффективной сегментации новых клиентов, с одной стороны, может значительно повысить прибыль, а с другой – еще на этапе верификации определить людей, потенциально склонных к мошенничеству и принять дополнительные меры мониторинга поведения данного пользователя. При этом, анализ поведения клиента возможен только в ретроспективе, то есть на основании уже совершенных операций.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
<!--            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">-->
<!--                <div class="callout callout-success" style="display: inline">-->
<!--                    Но все эти вызовы можно решить благодаря одной технологии.-->
<!--                </div>-->
<!--                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center" style="display: inline">-->
<!--                    <img src="/images/mizagene_black.png" alt=""width="300">-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="container row mx-auto px-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex text-center justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['Преимущества инвестиции в продукты'][isset($_GET['lang']) ? 'en' : 'ru']?>
                <br><?= $data['на базе технологии Mizagene'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Инвестиции в продукты на базе Mizagene на данном этапе развития технологии – это высокорентабельный бизнес, не подвергающейся ценностной амортизации.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
            <div class="row d-flex">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                    <img src="/images/technology.png" alt="" width="120px">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                    <h4 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['Рабочая технология готовая к использованию'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </h4>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Это не стартап – технологии более 17 лет. Она уже широко применяется в сфере безопасности дорожного движения и страхования. Подробнее об истории создания технологии Mizagene – здесь.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
            <div class="row d-flex">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                    <img src="/images/b2b.png" alt="" width="120px">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                    <h4 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['Широкие возможности на B2B рынке'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </h4>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Технология широко применима во всех сферах деятельности человека: HR, менеджмент, маркетинг, безопасность, спорт, обучение, личные отношения, развитие талантов и т.д. Каждая из названных ниш – это обширный рынок, не имеющий языковых и географических ограничений для продвижения.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
            <div class="row d-flex">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                    <img src="/images/profits.png" alt="" width="120px">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                    <h4 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['Высокая рентабельность на B2C рынке'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </h4>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Низкая себестоимость разработки новых программных решений за счет наличия готовой технологии, эксклюзивность и обширные возможности для вирусного продвижения B2C продуктов делают инвестиции в этом направлении сверхприбыльными (от 400% в течение 2 лет)'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
            <div class="row d-flex">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                    <img src="/images/umbrella.png" alt="" width="120px">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                    <h4 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['Низкие риски, высокая ликвидность'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </h4>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Проверьте работоспособность технологии, проанализировав в качестве субъектов анализа себя и своих близких – тех, кого, как вам кажется, вы знаете лучше всего. Результат анализа ответит сам за себя. Все остальное будет отражено в бизнес-плане интересующего вас направления. Разумеется, мы предоставим гарантии, соразмерные Вашим инвестициям.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="container row mx-auto px-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['Во что Вы можете инвестировать?'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Инвестиции в продукты на базе Mizagene на данном этапе развития технологии – это высокорентабельный бизнес, не подвергающейся ценностной амортизации.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-between mb-5 ps-0 pe-0">
            <ul class="investors-pill nav nav-pills nav-justified mb-5 flex-column flex-sm-row" id="pills-tab" role="tablist">
                <li class="investor_tab_1 nav-item" role="presentation">
                    <button style="border-radius: 5px 0px 0px 5px!important; min-height: 70px;" class="nav-link active" id="pills-1" data-bs-toggle="pill" data-bs-target="#pills-tab-1" type="button" role="tab" aria-controls="pills-tab-1" aria-selected="true">Youmee App</button>
                </li>
                <li class="investor_tab_2 nav-item" role="presentation">
                    <button style="min-height: 70px;" class="nav-link" id="pills-2" data-bs-toggle="pill" data-bs-target="#pills-tab-2" type="button" role="tab" aria-controls="pills-tab-2" aria-selected="true"><?= $data['Отраслевые решения'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </button>
                </li>
                <li class="investor_tab_3 nav-item" role="presentation">
                    <button style="border-radius: 0px 5px 5px 0px!important; min-height: 70px;" class="nav-link" id="pills-3" data-bs-toggle="pill" data-bs-target="#pills-tab-3" type="button" role="tab" aria-controls="pills-tab-3" aria-selected="true"><?= $data['Научно-исследовательская деятельность'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </button>
                </li>
            </ul>
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tab-1" role="tabpanel" aria-labelledby="pills-tab-1" tabindex="0">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><b style="color: #003C46;font-weight: 500"><?= $data['Бесплатное развлекательное мобильное приложение'][isset($_GET['lang']) ? 'en' : 'ru']?>
                                </b><?= $data[' с возможностью приобретения платного контента, которое анализирует поведение, таланты, врожденное здоровье и темперамент Конечного Пользователя по его фото, росту и параметрам запястья.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                            </p>
                            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><b style="color: #003C46;font-weight: 500"><?= $data['Приложение позволяет приглашать других людей'][isset($_GET['lang']) ? 'en' : 'ru']?>
                                </b><?= $data[' и получать совместные репорты и дополнительные бонусы, которые в последствии можно потратить для ограниченного доступа к закрытому для бесплатных пользователей контенту.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                            </p>
                            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Предусмотрена возможность приобретать доступ к платным репортам, сравнивать себя с знаменитостями и историческими деятелями, узнать о собственных талантах и талантах своих детей, делиться в социальных сетях, приглашать для получения совместных репортов членов семьи, друзей, партнеров и коллег и т.д.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                            </p>
                            <div class="callout callout-success">
                                <b style="color: #003C46;font-weight: 500"><?= $data['Уникальная мульти-реферальная стратегия'][isset($_GET['lang']) ? 'en' : 'ru']?>
                                </b> <?= $data['привлечения новых пользователей в купе с продуманной внутренней экономикой приложения и вирусным эффектом обрекают Youmee App стать самым успешным стартапом года и достичь показателя в 100M бесплатных и 13M платных пользователей за почти рекордные 18 месяцев.'][isset($_GET['lang']) ? 'en' : 'ru']?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tab-2" role="tabpanel" aria-labelledby="pills-tab-2" tabindex="1">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><b style="color: #003C46;font-weight: 500">    <?= $data['KYC продукт «Youmee Finance»'][isset($_GET['lang']) ? 'en' : 'ru']?>
                                </b> <?= $data['для финансового и банковского секторов (как вспомогательный инструмент скоринга физических лиц).'][isset($_GET['lang']) ? 'en' : 'ru']?>
                            </p>
                            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><b style="color: #003C46;font-weight: 500"><?= $data['KYC продукт «Youmee Gamble»'][isset($_GET['lang']) ? 'en' : 'ru']?>
                                </b> <?= $data['для предиктивного скоринга клиентов, направленного на выявления рисков мошенничества и качественную сегментацию клиентской базы на основании характера, психических и поведенческих особенностей, а также вкусовых предпочтений.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                            </p>
                            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><b style="color: #003C46;font-weight: 500"><?= $data['Youmee HR –'][isset($_GET['lang']) ? 'en' : 'ru']?>
                                </b> <?= $data['комплексное решение, направленное на оптимизацию бюджета компаний и повышение эффективности работы персонала. Имеет возможность постоянного развития за счет внедрения отраслевых решений.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tab-3" role="tabpanel" aria-labelledby="pills-tab-3" tabindex="2">
                    <div class="container row m-0 p-0">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Вы можете также инвестировать не в конкретный продукт, а непосредственно в Youmee Technologies. Большая часть инвестированных средств будет направлена на развитие научно-исследовательской базы, инфраструктуры и расширенное представление в мире.  Вы будете получать прибыль буквально с каждой сделки.  '][isset($_GET['lang']) ? 'en' : 'ru']?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="container row mx-auto px-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46"><?= $data['Варианты инвестиций'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </h1>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5" style="text-align: start; background-color: rgba(75, 173, 233, 0.2); border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><b style="color: #003C46;font-weight: 500"><?= $data['Процентный заем под гарантии'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </b></p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Вы вкладываете деньги под 50%-70% годовых (зависит от объема инвестиций).'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Минимальный пакет – 200.000 USD'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5" style="text-align: start;  background-color: white; border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><b style="color: #003C46;font-weight: 500"><?= $data['Долевое участие'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </b></p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['В зависимости от объема инвестиций, Вы получаете % от бизнеса, который может составлять от 5 до 30%.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['До 01 июля 2023 года в качестве бонуса мы предоставим Вам Welcome Shar Warranty – гарантию долевого участия во всех мобильных приложениях, разработанных с использованием технологии в будущем.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5" style="text-align: start; background-color: rgba(75, 173, 233, 0.2); border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><b style="color: #003C46;font-weight: 500"><?= $data['Долевое участие с гарантией выкупа'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </b></p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['В зависимости от объема инвестиций, Вы получаете % от бизнеса с гарантией выкупа Компанией по заранее оговоренной цене.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Право на получение дивидендов до выкупа, разумеется, остается за Вами. Срок выкупа обсуждается дополнительно.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Подать заявку можете по этой форме. Мы свяжемся с Вами в ближайшее время, вышлем презентацию и бизнес-план'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="container row mx-auto px-0" style="text-align: start; background-color: rgba(75, 173, 233, 0.2); border-radius: 10px; padding: 15px;">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-3">
            <h1 style="color: #003C46"><?= $data['Клиентский отдел'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
            <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><?= $data['Готовы сделать первый шаг к сотрудничеству? Заполните форму ниже, выберите формат и в поле «комментарий» напишите суть вашего запроса. Мы оперативно свяжемся с Вами и обсудим все возможные варианты сотрудничества.'][isset($_GET['lang']) ? 'en' : 'ru']?>
            </p>
        </div>

        <!--            <form method="post" action="/site/become-partners">-->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="text-align: start">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><?= $data['Имя Фамилия*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?= $newStr = substr($data['Имя Фамилия*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label"><?= $data['Должность*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="<?= $newStr = substr($data['Должность*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label"><?= $data['Название компании*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="<?= $newStr = substr($data['Название компании*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput4" class="form-label"><?= $data['Сайт компании*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="<?= $newStr = substr($data['Сайт компании*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
            </div>
        </div>


        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="text-align: start">
            <div class="mb-3">

                <label for="exampleFormControlInput5" class="form-label"><?= $data['Тип инвестиции'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </label>
                <select class="form-select" aria-label="Тип сотрудничества*">
                    <option value="1"><?= $data['Youmee App'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </option>
                    <option value="2"><?= $data['Отраслевые решения'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </option>
                    <option value="3"><?= $data['Научно-исследовательская деятельность'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </option>
                    <option value="4"><?= $data['Пока не решил(а)'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </option>
                </select>
                <!--                        <label for="exampleFormControlInput5" class="form-label">Тип сотрудничества*</label>-->
                <!--                        <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="Тип сотрудничества">-->
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput6" class="form-label"><?= $data['Страна*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput6" placeholder="<?= $newStr = substr($data['Страна*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput7" class="form-label"><?= $data['Телефон*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput7" placeholder="<?= $newStr = substr($data['Телефон*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput8" class="form-label"><?= $data['Email address*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </label>
                <input type="email" class="form-control" id="exampleFormControlInput8" placeholder="name@example.com" required>
            </div>
        </div>


        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="text-align: start">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"><?= $data['Комментарий*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
        </div>

        <div class="row col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3 d-flex justify-content-center" style="text-align: start; margin-top: auto">
            <div class="mb-3 w-100">
                <button class="btn fillGreenButton w-100"><?= $data['Отправить'][isset($_GET['lang']) ? 'en' : 'ru']?></button>
            </div>
        </div>
        <!--            </form>-->
    </div>
</div>

<?php include('footer.php') ?>
