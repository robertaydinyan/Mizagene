<?php
include 'translations.php';
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Country;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;

$cookies = Yii::$app->response->cookies;
$countries = new Country();
$countries = $countries->getCountries();

$lang = Yii::$app->request->cookies->getValue('lang');
if (!$lang) {
    $cookies->add(new \yii\web\Cookie([
        'name' => 'lang',
        'value' => 'en',
    ]));
    $lang = 'en';
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Youmee Tech</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/scrollbar.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <script src="https://kit.fontawesome.com/a262c03b8a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!--    <style>-->
<!---->
<!--        #info-->
<!--        {-->
<!--            font-size: 18px;-->
<!--            color: #555;-->
<!--            text-align: center;-->
<!--            margin-bottom: 25px;-->
<!--        }-->
<!---->
<!--        a{-->
<!--            color: #074E8C;-->
<!--        }-->
<!---->
<!--        .scrollbar-->
<!--        {-->
<!--            margin-left: 30px;-->
<!--            float: left;-->
<!--            background: #F5F5F5;-->
<!--            overflow-y: scroll;-->
<!--            margin-bottom: 25px;-->
<!--        }-->
<!---->
<!--        .force-overflow-->
<!--        {-->
<!--            min-height: 450px;-->
<!--        }-->
<!---->
</head>



<body>
<div class="scroll-container">
    <div class="scroll-content">
<header>


    <div class="container-fluid pre-header d-none d-md-flex align-items-center">
        <div class="container row mx-auto my-auto px-0 d-flex ">
            <div class="col-xl-7 col-lg-7 col-md-10 col-sm-11 col-12 d-flex ">
                <a href="<?php echo Url::toRoute(['/service']); ?>"
                   class="<?= Yii::$app->controller->action->id == 'service' ? 'active' : '' ?>"><?= $data['subtitle1'][$lang] ?></a>
                <label>|</label>
                <a href="<?php
                $newUrl = Url::toRoute(['/about-technology']);
                echo $newUrl;
                ?>" class="<?= Yii::$app->controller->action->id == 'about-technology' ? 'active' : '' ?>"> <?= $data['subtitle2'][$lang] ?></a>
                <label>|</label>
                <a href="<?php
                $newUrl = Url::toRoute(['/investors']);
                echo $newUrl;
                ?>" class="<?= Yii::$app->controller->action->id == 'investors' ? 'active' : '' ?>"> <?= $data['subtitle3'][$lang] ?></a>
                <label>|</label>
                <a href="<?php
                $newUrl = Url::toRoute(['/partners']);
                echo $newUrl;
                ?>" class="<?= Yii::$app->controller->action->id == 'partners' ? 'active' : '' ?>"> <?= $data['subtitle6'][$lang] ?></a>
                <label>|</label>

                <span style="color: white">
                        <div class="dropdown">
                          <button class="dropdown-toggle p-0" style="background: none!important; border:none; color:white;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-globe" style="color: #ffffff;"></i>                      </button>
                          <ul class="dropdown-menu" style="z-index: 999999999999!important; min-width: 20px!important; color: black!important;">
                            <li><a class="dropdown-item" href="/site/change-lang?lang=en">En</a></li>
                            <li><a class="dropdown-item" href="/site/change-lang?lang=ru">Ru</a></li>
                            <li><a class="dropdown-item" href="/site/change-lang?lang=es">Es</a></li>
                          </ul>
                        </div>
                    </span>

            </div>

            <!--                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex justify-content-end">-->
            <!--                    <label>--><?//= $data['subtitle4'][$lang] ?>
            <!--                        <i class="fa-brands fa-facebook" style="color: #fff;width: 15px; height: 15px; margin-left: 10px;"></i>-->
            <!--                        <i class="fa-brands fa-whatsapp fa-lg" style="color: #ffffff;width: 15px; height: 15px; margin-left: 10px;"></i>-->
            <!--                    </label>-->
            <!--                </div>-->
            <?php if(Yii::$app->user->isGuest) { ?>
                <div class="col-xl-5 col-lg-5 col-md-2 col-sm-1 col-1 d-flex justify-content-end">
                    <button class="signUpBtn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions"><?= $data['subtitle5'][$lang] ?></button>
                </div>
            <?php }?>
        </div>
    </div>

    <nav class="container-fluid navbar fixed-top navbar-expand-lg header-menu">
        <div class="container d-flex" style="background: white;">
            <div class="">
                <a href="/"><img class="navbar-brand" src="/images/logo.png" alt="Logo" width="222" height="60"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container collapse navbar-collapse justify-content-end p-0" id="navbarSupportedContent" style="padding-right: 0;">
                <ul class="navbar-nav mb-2 mb-lg-0" style="font-size: 19px!important;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/"><?= $data['menu1'][$lang] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works"><?= $data['menu2'][$lang] ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: rgb(114, 114, 114);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $data['menu3'][$lang] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="p-2"><a class="dropdown-item" href="/individual-solutions"><img src="/images/individual.png" alt="" width="35px" class="me-2"><?= $data['card1_title'][$lang] ?></a></li>
                            <li class="p-2"><a class="dropdown-item" href="/personal-solutions"><img src="/images/talents.png" alt=""  width="35px" class="me-2"><?= $data['card2_title'][$lang] ?></a></li>
                            <li class="p-2"><a class="dropdown-item" href="/kyc-solutions"><img src="/images/kyc.png" alt=""  width="35px" class="me-2"><?= $data['card3_title'][$lang] ?></a></li>
                            <li class="p-2"><a class="dropdown-item" href="/hr-solutions"><img src="/images/hr.png" alt=""  width="35px" class="me-2"><?= $data['card4_title'][$lang] ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faq"><?= $data['menu4'][$lang] ?></a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#" style="color: rgb(210, 58, 225)">--><?php //= $data['menu5'][$lang] ?><!--</a>-->
<!--                    </li>-->
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="/service"><?= $data['subtitle1'][$lang] ?></a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="/about-technology"><?= $data['subtitle2'][$lang] ?></a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="/investors"><?= $data['subtitle3'][$lang] ?></a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="/partners"><?= $data['subtitle6'][$lang] ?></a>
                    </li>
                    <?php if(!Yii::$app->user->isGuest) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/all-subjects"><?= $data['Личный кабинет'][$lang] ?></a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <?php if(!Yii::$app->user->isGuest){
                            ?>
                            <?php $form = ActiveForm::begin([
                                'class' => 'logout-form',
                                'action' => ['site/logout'],
                                'method' => 'post',
                            ]);
                            $logout = $data['menu7'][$lang];
                            ?>

                            <?= Html::submitButton($logout, ['class' => 'nav-link btn btn-link logout loginLink',
                                'style' =>'margin-right: 0!important',]) ?>

                            <?php ActiveForm::end();
                        }
                        else{
                            ?>
                            <a class="nav-link loginLink" href="#"  style="margin-right: 0!important;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                <?= $data['menu6'][$lang] ?>
                            </a>
                        <?php }
                        ?>
                    </li>
                    <?php if(Yii::$app->user->isGuest) { ?>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="#"  style="margin-right: 0!important;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions">
                            <?= $data['subtitle5'][$lang] ?>
                        </a>
                    </li>
                    <?php } ?>
                    <li class="nav-item dropdown d-md-none">
                        <a class="nav-link dropdown-toggle" style="color: rgb(114, 114, 114);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-globe" style="color: grey;"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/site/change-lang?lang=en">En</a></li>
                            <li><a class="dropdown-item" href="/site/change-lang?lang=ru">Ru</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="offcanvas offcanvas-end <?php if (isset($activeTabLog)) echo 'show'; ?>" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"><?= $data['menu6'][$lang] ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <?php $form = ActiveForm::begin([
                'class' => 'login-form',
                'action' => ['site/login'],
                'method' => 'post',
                'options' => ['id' => 'login-form']
            ]);
            $login_lang = $data['menu6'][$lang];
            ?>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email-input" placeholder="name@example.com" required>
                <label for="email-input"><?= $data['menu8'][$lang] ?></label>
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password-input" placeholder="Password" required>
                <label for="password-input"><?= $data['password'][$lang] ?></label>
                <div class="invalid-feedback">Please enter a password.</div>
            </div>


            <?php if(isset($login_model) && isset($login_model->getErrors()['password'])) { ?>
                <p class="error_feedback"><?= $login_model->getErrors()['password'][0] ?></p>
            <?php  } ?>

            <input type="hidden" name="activeTab" value="">
            <div class="col-6 mt-3">
                <?= Html::submitButton($login_lang, ['class' => 'btn fillButton']) ?>
            </div>

            <?= Html::a('Sign up with Facebook', ['site/signup-facebook'], ['class' => 'btn fillButton mt-3']) ?>
            <?php ActiveForm::end();?>
        </div>

        <script>
            const form = document.querySelector('#login-form');
            const emailInput = form.querySelector('#email-input');
            const passwordInput = form.querySelector('#password-input');

            emailInput.addEventListener('input', () => {
                if (!emailInput.checkValidity()) {
                    emailInput.classList.add('is-invalid');
                } else {
                    emailInput.classList.remove('is-invalid');
                }
            });

            passwordInput.addEventListener('input', () => {
                if (!passwordInput.checkValidity()) {
                    passwordInput.classList.add('is-invalid');
                } else {
                    passwordInput.classList.remove('is-invalid');
                }
            });

            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                    emailInput.classList.add('is-invalid');
                    passwordInput.classList.add('is-invalid');
                }
                form.classList.add('was-validated');
            });
        </script>

    </div>

    <div class="offcanvas offcanvas-end <?php if (isset($activeTabSignup) || isset($activeTabSignupCompany)) echo 'show'; ?>" data-bs-scroll="true" tabindex="-1" id="offcanvasSignUp" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"><?= $data['signup'][$lang] ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?= $data['user'][$lang] ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?= $data['company'][$lang] ?></button>
                </li>
            </ul>

            <div class="tab-content " id="pills-tabContent">
                <div class="tab-pane fade <?php if (isset($activeTabSignup) || !isset($activeTabSignupCompany)) echo 'show active'; ?> " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form action="/site/signup" method="post" id="user-regForm">
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="username-input" placeholder="Username">
                            <label for="username-input"><?= $data['nickname'][$lang] ?></label>
                            <?php if(isset($model) && isset($model->getErrors()['username'])) { ?>
                                <p class="error_feedback"><?= $model->getErrors()['username'][0] ?></p>
                            <?php  } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <?php
                            $yearOptions = [];
                            for ($i = date('Y'); $i >= 1903; $i--) {
                                $yearOptions[$i] = $i;
                            }
                            ?>
                            <?= Html::dropDownList('year_of_birth', null, $yearOptions, ['class' => 'form-control select2','id' => 'year-input', 'prompt' => 'Year of birth']) ?>

                            <?php if(isset($model) && isset($model->getErrors()['year_of_birth'])) { ?>
                                <p class="error_feedback"><?= $model->getErrors()['year_of_birth'][0] ?></p>
                            <?php  } ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="email-input" placeholder="name@example.com">
                            <label for="email-input"><?= $data['email'][$lang] ?></label>
                            <?php if(isset($model) && isset($model->getErrors()['email'])) { ?>
                                <p class="error_feedback"><?= $model->getErrors()['email'][0] ?></p>
                            <?php  } ?>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-control select2" id="country-input" name="country">
                                <option value="">Select country</option>
                                <?php foreach ($countries as $key => $country) { ?>
                                    <option value="<?= $key ?>"><?=$country ?></option>
                                <?php } ?>
                            </select>
                            <label for="country-input"><?= $data['country'][$lang] ?></label>
                            <?php if(isset($model) && isset($model->getErrors()['country'])) { ?>
                                <p class="error_feedback"><?= $model->getErrors()['country'][0] ?></p>
                            <?php  } ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="password-input" placeholder="Password">
                            <label for="password-input"><?= $data['password'][$lang] ?></label>
                            <?php if(isset($model) && isset($model->getErrors()['password'])) { ?>
                                <p class="error_feedback"><?= $model->getErrors()['password'][0] ?></p>
                            <?php  } ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password_repeat" class="form-control" id="repeatPassword-input" placeholder="Password">
                            <label for="repeatPassword-input"><?= $data['confirm_password'][$lang] ?></label>
                            <?php if(isset($model) && isset($model->getErrors()['password_repeat'])) { ?>
                                <p class="error_feedback"><?= $model->getErrors()['password_repeat'][0] ?></p>
                            <?php  } ?>
                        </div>


                        <input type="hidden" name="_csrf" value="<?= Yii::$app->getRequest()->getCsrfToken();?>">

                        <input type="hidden" name="activeTab" value="">

                        <div class="col-12 mt-3">
                            <p class="">* <?= $data['signup_text1'][$lang] ?></p>
                        </div>
                        <div class="col-6 mt-3">
                            <button type="submit" class="btn fillButton"><?= $data['signup'][$lang] ?></button>
                        </div>

                    </form>
                </div>


                <!--                --------------------------------------------------------------------------->
                <div class="tab-pane fade <?php if (isset($activeTabSignupCompany)) echo 'show active'; ?>" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <form action="/site/signup" method="post" id="company-regForm">

                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
                            <label for="floatingInput"><?= $data['nickname'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['username'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['username'][0] ?></p>
                            <?php  } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput"><?= $data['email'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['email'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['email'][0] ?></p>
                            <?php  } ?>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" name="company_name" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword"><?= $data['company_name'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['company_name'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['company_name'][0] ?></p>
                            <?php  } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control select2" name="country">
                                <option value="">Select country</option>
                                <?php foreach ($countries as $key => $country) { ?>
                                    <option value="<?= $key ?>"><?=$country ?></option>
                                <?php } ?>
                            </select>
                            <label for="floatingInput"><?= $data['country'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['country'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['country'][0] ?></p>
                            <?php  } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="position" class="form-control" id="floatingInput" placeholder="position">
                            <label for="floatingInput"><?= $data['position'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['position'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['position'][0] ?></p>
                            <?php  } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control select2" name="direction">
                                <option><?= $data['KYC решения'][$lang] ?></option>
                                <option><?= $data['Управление персоналом'][$lang] ?></option>
                                <option><?= $data['Управление талантами'][$lang] ?></option>
                                <option><?= $data['Партнерство'][$lang] ?></option>
                            </select>
                            <label for="floatingInput"><?= $data['direction'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['direction'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['direction'][0] ?></p>
                            <?php  } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control select2" name="employees">
                                <option>1-15</option>
                                <option>15-50</option>
                                <option>50-100</option>
                                <option>100-250</option>
                                <option>250-500</option>
                                <option>500-1000</option>
                                <option>1000+</option>
                            </select>
                            <label for="floatingInput"><?= $data['employees'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['employees'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['employees'][0] ?></p>
                            <?php  } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="company_link" class="form-control" id="floatingInput" placeholder="company_link">
                            <label for="floatingInput"><?= $data['company_link'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['company_link'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['company_link'][0] ?></p>
                            <?php  } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="phone" class="form-control" id="floatingInput" placeholder="phone">
                            <label for="floatingInput"><?= $data['phone'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['phone'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['phone'][0] ?></p>
                            <?php  } ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword"><?= $data['password'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['password'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['password'][0] ?></p>
                            <?php  } ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password_repeat" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword"><?= $data['confirm_password'][$lang] ?></label>
                            <?php if(isset($isCompany) && isset($isCompany->getErrors()['password_repeat'])) { ?>
                                <p class="error_feedback"><?= $isCompany->getErrors()['password_repeat'][0] ?></p>
                            <?php  } ?>
                        </div>

                        <input type="hidden" name="activeTab" value="">

                        <input type="hidden" name="is_company" value="1">
                        <input type="hidden" name="status" value="1">
                        <input type="hidden" name="_csrf" value="<?= Yii::$app->getRequest()->getCsrfToken();?>">

                        <div class="col-12 mt-3">
                            <p class="">* <?= $data['signup_text1'][$lang] ?></p>
                        </div>
                        <div class="col-6 mt-3">
                            <button type="submit" class="btn fillButton"><?= $data['signup'][$lang] ?></button>
                        </div>
                    </form>
                </div>

            </div>


        </div>
    </div>

</header>

        <script>
            const form = document.querySelector('#user-regForm');
            const usernameInput = form.querySelector('#username-input');
            const emailInput = form.querySelector('#email-input');
            const passwordInput = form.querySelector('#password-input');
            const repeatPasswordInput = form.querySelector('#repeatPassword-input');
            const yearInput = form.querySelector('#year-input');
            const countryInput = form.querySelector('#country-input');


            usernameInput.addEventListener('input', () => {
                if (!usernameInput.checkValidity()) {
                    usernameInput.classList.add('is-invalid');
                } else {
                    usernameInput.classList.remove('is-invalid');
                }
            });
            emailInput.addEventListener('input', () => {
                if (!emailInput.checkValidity()) {
                    emailInput.classList.add('is-invalid');
                } else {
                    emailInput.classList.remove('is-invalid');
                }
            });

            passwordInput.addEventListener('input', () => {
                if (!passwordInput.checkValidity()) {
                    passwordInput.classList.add('is-invalid');
                } else {
                    passwordInput.classList.remove('is-invalid');
                }
            });

            repeatPasswordInput.addEventListener('input', () => {
                if (!repeatPasswordInput.checkValidity()) {
                    repeatPasswordInput.classList.add('is-invalid');
                } else {
                    repeatPasswordInput.classList.remove('is-invalid');
                }
            });

            yearInput.addEventListener('input', () => {
                if (!yearInput.checkValidity()) {
                    yearInput.classList.add('is-invalid');
                } else {
                    yearInput.classList.remove('is-invalid');
                }
            });

            countryInput.addEventListener('input', () => {
                if (!countryInput.checkValidity()) {
                    countryInput.classList.add('is-invalid');
                } else {
                    countryInput.classList.remove('is-invalid');
                }
            });

            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                    usernameInput.classList.add('is-invalid');
                    emailInput.classList.add('is-invalid');
                    passwordInput.classList.add('is-invalid');
                    repeatPasswordInput.classList.add('is-invalid');
                    yearInput.classList.add('is-invalid');
                    countryInput.classList.add('is-invalid');
                }
                form.classList.add('was-validated');
            });
        </script>

        <script>

            const form = document.querySelector('#company-regForm');


            const username = form.querySelector('input[name="username"]');
            const yearOfBirth = form.querySelector('select[name="year_of_birth"]');
            const email = form.querySelector('input[name="email"]');
            const country = form.querySelector('select[name="country"]');
            const password = form.querySelector('input[name="password"]');
            const passwordRepeat = form.querySelector('input[name="password_repeat"]');


            form.addEventListener('submit', (event) => {

                event.preventDefault();

                let isValid = true;

                if (username.value.trim() === '') {
                    username.classList.add('is-invalid');
                    isValid = false;
                } else {
                    username.classList.remove('is-invalid');
                }

                if (yearOfBirth.value === '') {
                    yearOfBirth.classList.add('is-invalid');
                    isValid = false;
                } else {
                    yearOfBirth.classList.remove('is-invalid');
                }

                if (email.value.trim() === '') {
                    email.classList.add('is-invalid');
                    isValid = false;
                } else {
                    email.classList.remove('is-invalid');
                }

                if (country.value === '') {
                    country.classList.add('is-invalid');
                    isValid = false;
                } else {
                    country.classList.remove('is-invalid');
                }

                if (password.value.trim() === '') {
                    password.classList.add('is-invalid');
                    isValid = false;
                } else {
                    password.classList.remove('is-invalid');
                }

                if (passwordRepeat.value.trim() === '') {
                    passwordRepeat.classList.add('is-invalid');
                    isValid = false;
                } else if (password.value.trim() !== passwordRepeat.value.trim()) {
                    passwordRepeat.classList.add('is-invalid');
                    isValid = false;
                } else {
                    passwordRepeat.classList.remove('is-invalid');
                }

                if (isValid) {
                    form.submit();
                }
            });
        </script>
<body>





