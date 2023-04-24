<?php include('header.php')?>

    <div class="container-fluid firstContainer">
        <div id="particles-js"></div>
        <img src="/images/collage.jpg" class="testBack">
        <img src="/images/chineese.png" class="backImage">
        <div class="container" style="padding-top: 16%">
            <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: rgb(179, 52, 220)">Партнерам</span></h1>
            <p class="subtitle">
                Компания Youmee Technologies открыта для сотрудничества <br>
                и предлагает 3 варианта:
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
                <h1 style="color: #003C46">Дистрибуция услуг и продуктов Youmee Technologies в вашем регионе</h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">Вы можете стать дилером или дистрибьютором Youmee Technologies вашем регионе. </p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">Подробную информацию о предлагаемых нами условиях сотрудничества в разрезе продуктов и услуг Вы получите в рамках совместной сессии. Дилерская скидка с продажи API запросов составляет 25%. Дистрибьюторская скидка составляет от 30 до 50%.  Это зависит от продукта, типа сотрудничества и формата поставки. При этом, 100% от стоимости внедрения сложных корпоративных продуктов забирает Дилер.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46">Интеграция технологии Mizagene c Вашим приложением или корпоративным ПО</h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">Создайте дополнительную ценность вашим клиентам – усильте имеющиеся продукты модульными решениями от Youmee Technologies. Условия сотрудничества зависят от отрасли, популярности Вашего ПО и объема клиентской базы. </p>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46">Создание новых продуктов</h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">Условия партнерства в рамках разработки нового программного обеспечения обсуждаются индивидуально. </p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">Все, что для этого нужно, это просто заполнить форму ниже, выбрать формат и в поле «комментарий» написать суть вашего запроса. Мы оперативно свяжемся с Вами.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46">Партнерский отдел</h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">Готовы сделать первый шаг к сотрудничеству? Заполните форму ниже, выберите формат и в поле «комментарий» напишите суть вашего запроса. Мы оперативно свяжемся с Вами и обсудим все возможные варианты сотрудничества.</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="text-align: start">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Имя Фамилия</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Имя Фамилия">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Должность</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Должность">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Название компании</label>
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Название компании">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput4" class="form-label">Сайт компании</label>
                    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Сайт компании">
                </div>
            </div>


            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="text-align: start">
                <div class="mb-3">
                    <label for="exampleFormControlInput5" class="form-label">Тип сотрудничества</label>
                    <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="Тип сотрудничества">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput6" class="form-label">Страна</label>
                    <input type="text" class="form-control" id="exampleFormControlInput6" placeholder="Страна">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput7" class="form-label">Телефон</label>
                    <input type="text" class="form-control" id="exampleFormControlInput7" placeholder="Телефон">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput8" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput8" placeholder="name@example.com">
                </div>
            </div>


            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5" style="text-align: start">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Комментарий</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 d-flex justify-content-center" style="text-align: start; margin-top: auto">
                <div class="mb-3">
                    <button class="btn btn-primary">Отправить</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: #003C46">Полезная информация</h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">О безопасности передачи данных можете ознакомиться здесь</p>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);">О возможных вариантах поставки программного обеспечения Youmee Technologies на базе технологии Mizagene можете ознакомиться здесь</p>
            </div>
        </div>
    </div>

<?php include('footer.php') ?>