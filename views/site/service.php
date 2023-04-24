<?php include('header.php')?>

<div class="container-fluid firstContainer" style="min-height: 450px">
    <div id="particles-js" style="height: 450px"></div>
    <div class="container" style="padding-top: 155px">
        <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: #003C46"><?= $data['О Сервисе Youmee'][isset($_GET['lang']) ? 'en' : 'ru'] ?></span></h1>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">
                Youmee Technologies – эксклюзивный партнер Mizagene Technologies и вендор программного обеспечения типов SAAS и PAAS в области разработки наукоемких AI решений на базезапатентованной технологии Mizagene. <br><br>
                Команда Youmee Technologies – это опытные инженеры в области автоматизации и разработки BI решений, психологи и консультанты, объединенные общностью принципов:
            </p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="container row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
            <h1 style="color: #003C46">Цели и принципы Youmee Technologies:</h1>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="text-align: start; background-color: rgba(234, 51, 61, 0.2); border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">1. Принцип «не навредить»</span><br>
                Возможности технологии могут быть направлены как во благо личности, так и с целью причинения этой личности вреда. Ошеломительная точность анализа (от 75 до 93% в зависимости от параметра анализа и качества портретного фото) позволяет выявить не только сильные, но и слабые черты характера, что делает субъект анализа в каком-то смысле «уязвимым».</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="text-align: start; background-color: white; border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">2. Возрастные ограничения</span><br>
                Вся наша команда - сторонники семейных традиций, а дети должны сохранить свое право на безопасное детство.  Именно поэтому часть параметров имеют возрастные ограничения доступа, которые распространяются не только на субъект анализа, но и на пользователя системы, который получает доступ к этой информации.  При этом, если указать неправильный год рождения, результаты анализа не будут соответствовать действительности, что позволяет нам обеспечить выполнение условий возрастных ограничений</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="text-align: start; background-color: white; border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">3. Уважение региональных и культурных особенностей при разработке репортов</span><br>
                Мы тщательно анализируем параметры репортов на предмет возможной негативной реакции носителей тех или иных культурных ценностей. Так, например, тот же репорт для европейской аудитории будет отличаться от его версии, разработанной для Ближневосточного или Азиатского региона</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="text-align: start; background-color: rgba(75, 173, 233, 0.2); border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">4. Предоставление информации пользователям в количестве, не большем, чем необходимо</span><br>
                В зависимости от того, с какой целью используется технология, корпоративные пользователи получают только ту информацию о человеке, которая им необходима. Так, например, пользователям Youmee HR мы предоставляем доступ только к тем параметрам анализа сотрудников и соискателях, результаты которых могут повлиять на их профессиональную деятельность. Вся остальная информация о личности субъекта анализа будет закрыта.</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="text-align: start; background-color: rgba(210, 58, 225, 0.2); border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">5. Безопасность данных</span><br>
                Технологии безразлично имя человека, его статус в обществе, политические или религиозные убеждения, семейный статус, даже цвет кожи. Не нужны и его личные данные, такие как номер телефона, адрес или почта. Даже роль фотографии ограничивается на этапе формирования контрольных точек на лице и может быть после этого удалена. Все результаты анализа несут объективный характер и генерируются на основании входных данных на сервере, у которого нет доступа к фотографиям.
                В качестве дополнительной безопасности, мы предлагаем корпоративным клиентам разместить наше программное решение с открытым кодом, задача которого заключается в том, чтобы отправлять нам координаты контрольных точек на лице субъекта, рост, размер запястья в обхвате, пол и год рождения. При этом, доступа к самим фотографиям у нас нет: они остаются на корпоративном сервере пользователя.</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="text-align: start; background-color: white; border-radius: 10px; padding: 15px;">
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">6. Сохранение права на односторонний отказ в предоставлении услуг</span><br> пользователям и корпоративным клиентам в случае подозрения, что они используют информацию для достижения целей, способных причинить вред людям</p>
            <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">7. Верность миссии, провозглашенной авторами Технологии: «помощь людям в принятии осознанных решений»</span><br>
                Наши технологические и программные решения помогают людям осознать свой потенциал, найти наиболее эффективное применение своим врожденным талантам, перестать заниматься самообманом и сэкономить драгоценные годы жизни – как своей, так и окружающих – потому что «нашли» себя.
                Эта же миссия относится и к компаниям. Наша цель в работе с ними – помочь найти «своего» клиента и «своего» сотрудника. Везде необходима осознанность выбора.</p>

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
