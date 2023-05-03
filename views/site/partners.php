<?php include('header.php');
use yii\helpers\Url;

?>

    <div class="container-fluid firstContainer" style="min-height: 450px">
        <div id="particles-js" style="height: 450px"></div>
        <div class="container d-flex row mx-auto px-0" style="padding-top: 155px">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 mt-3 text-center">
                <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: #003C46"><?= $data['subtitle6'][$lang]?></span></h1>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Компания Youmee Technologies открыта для сотрудничества и предлагает 3 возможных варианта:'][$lang]?></p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
                <img src="/images/community.png" alt=""width="250">
            </div>
        </div>
    </div>

<div class="container mt-5">
    <div class="container row mx-auto px-0">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-5 pe-sm-5 mx-auto">
            <div class="row d-flex">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                    <img src="/images/distribution.png" alt="" width="120px">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                    <h2 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['Дистрибуция'][$lang]?></h2>
                    <h5 style="color: #003C46"> <?= $data['услуг и продуктов Youmee Technologies в вашем регионе'][$lang]?>
                    </h5>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Подробную информацию о предлагаемых нами условиях сотрудничества в разрезе продуктов и услуг Вы получите в рамках совместной сессии. Дилерская скидка с продажи API запросов составляет 25%. Дистрибьюторская скидка составляет от 30 до 50%.  Это зависит от продукта, типа сотрудничества и формата поставки. При этом, 100% от стоимости внедрения сложных корпоративных продуктов забирает Дилер.'][$lang]?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-5">
            <div class="row d-flex">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                    <img src="/images/integration.png" alt="" width="120px">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                    <h2 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['Интеграция'][$lang]?>
                    </h2>
                    <h5 style="color: #003C46"><?= $data['технологии Mizagene c Вашим приложением или корпоративным ПО'][$lang]?>
                    </h5>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Создайте дополнительную ценность вашим клиентам – усильте имеющиеся продукты модульными решениями от Youmee Technologies. Условия сотрудничества зависят от отрасли, популярности Вашего ПО и объема клиентской базы. '][$lang]?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-5 ps-sm-5 mx-auto">
            <div class="row d-flex">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 text-center">
                    <img src="/images/new-product.png" alt="" width="120px">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 text-center">
                    <h2 style="color: #003C46; margin-bottom: 0; padding-bottom: 0"><?= $data['Создание'][$lang]?>
                    </h2>
                    <h5 style="color: #003C46"><?= $data['новых продуктов с использованием технологии Mizagene'][$lang]?>
                    </h5>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Условия партнерства в рамках разработки нового программного обеспечения обсуждаются индивидуально.'][$lang]?>
                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Все, что для этого нужно, это просто заполнить форму ниже, выбрать формат и в поле «комментарий» написать суть вашего запроса. Мы оперативно свяжемся с Вами.'][$lang]?>
                    </p>
                    <p></p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container mb-5">
    <div class="container row mx-auto px-0" style="text-align: start; background-color: rgba(75, 173, 233, 0.2); border-radius: 10px; padding: 15px;">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-3">
            <h1 style="color: #003C46"><?= $data['Партнерский отдел'][$lang]?>
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

                <label for="exampleFormControlInput5" class="form-label"><?= $data['Тип сотрудничества*'][$lang]?>
                </label>
                <select class="form-select" aria-label="Тип сотрудничества*">
                    <option value="1"><?= $data['Дистрибуция'][$lang]?>
                    </option>
                    <option value="2"><?= $data['Интеграция'][$lang]?>
                    </option>
                    <option value="3"><?= $data['Создание'][$lang]?>
                    </option>
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






