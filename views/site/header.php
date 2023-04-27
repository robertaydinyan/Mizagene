<?php
include 'translations.php';
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Youmee Tech</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <script src="https://kit.fontawesome.com/a262c03b8a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<header>
        <div class="container-fluid pre-header">
            <div class="container d-flex ">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12 d-flex ">

                    <a href="/site/service" class="<?= Yii::$app->controller->action->id == 'service' ? 'active' : '' ?>"><?= $data['subtitle1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    <label>|</label>
                    <a href="/site/about-technology" class="<?= Yii::$app->controller->action->id == 'about-technology' ? 'active' : '' ?>"> <?= $data['subtitle2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    <label>|</label>
                    <a href="/site/investors" class="<?= Yii::$app->controller->action->id == 'investors' ? 'active' : '' ?>"> <?= $data['subtitle3'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    <label>|</label>
                    <a href="/site/partners" class="<?= Yii::$app->controller->action->id == 'partners' ? 'active' : '' ?>"> <?= $data['subtitle6'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    <label>|</label>

                    <span style="color: white">
                        <div class="dropdown">
                          <button class="dropdown-toggle p-0" style="background: none!important; border:none; color:white;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-globe" style="color: #ffffff;"></i>                      </button>
                          <ul class="dropdown-menu" style="z-index: 999999999999!important; min-width: 20px!important; color: black!important;">
                            <li><a class="dropdown-item" href="<?php
                                $currentUrl = Yii::$app->request->url;
                                if (Yii::$app->controller->route == 'site/index') {
                                    $currentUrl = Yii::$app->getUrlManager()->getBaseUrl();
                                }
                                echo $currentUrl;?>/?lang=en">En</a></li>
                            <li><a class="dropdown-item" href="/">Ru</a></li>
                          </ul>
                        </div>
                    </span>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 d-flex justify-content-end me-4">
                    <label><?= $data['subtitle4'][isset($_GET['lang']) ? 'en' : 'ru'] ?>
                        <i class="fa-brands fa-facebook" style="color: #fff;width: 15px; height: 15px; margin-left: 10px;"></i>
                        <i class="fa-brands fa-whatsapp fa-lg" style="color: #ffffff;width: 15px; height: 15px; margin-left: 10px;"></i>
                    </label>
                </div>

                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12 d-flex justify-content-end">
                    <button class="signUpBtn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions"><?= $data['subtitle5'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                </div>

            </div>
        </div>

    <nav class="container-fluid navbar fixed-top navbar-expand-lg header-menu">
        <div class="container d-flex">
            <div class="w-50">
                <a href="/"><img class="navbar-brand" src="/images/logo.png" alt="Logo" width="222" height="60"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container collapse navbar-collapse justify-content-end pr-0" id="navbarSupportedContent" style="padding-right: 0;">
                <ul class="navbar-nav mb-2 mb-lg-0" style="font-size: 19px!important;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><?= $data['menu1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: rgb(114, 114, 114);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $data['menu3'][isset($_GET['lang']) ? 'en' : 'ru'] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="p-2"><a class="dropdown-item" href="/site/individual-solutions"><img src="/images/individual.png" alt="" width="35px" class="me-2"><?= $data['solutions1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a></li>
                            <li class="p-2"><a class="dropdown-item" href="/site/personal-solutions"><img src="/images/talents.png" alt=""  width="35px" class="me-2"><?= $data['solutions2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a></li>
                            <li class="p-2"><a class="dropdown-item" href="/site/kyc-solutions"><img src="/images/kyc.png" alt=""  width="35px" class="me-2"><?= $data['solutions3'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a></li>
                            <li class="p-2"><a class="dropdown-item" href="/site/hr-solutions"><img src="/images/hr.png" alt=""  width="35px" class="me-2"><?= $data['solutions4'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= $data['menu2'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="/site/faq">--><?//= $data['menu4'][isset($_GET['lang']) ? 'en' : 'ru'] ?><!--</a>-->
<!--                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: rgb(210, 58, 225)"><?= $data['menu5'][isset($_GET['lang']) ? 'en' : 'ru'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link loginLink" href="#"  style="padding: 5px 0!important;margin-right: 0!important;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <?= $data['menu6'][isset($_GET['lang']) ? 'en' : 'ru'] ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Sign In</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="col-6 mt-3">
                <button class="btn fillButton">Sign In</button>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSignUp" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"><?= $data['signup'][isset($_GET['lang']) ? 'en' : 'ru'] ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?= $data['user'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?= $data['company'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
                        <label for="floatingInput"><?= $data['nickname'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput"><?= $data['email'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"><?= $data['password'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="confirm_password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"><?= $data['confirm_password'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>

                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
                        <label for="floatingInput"><?= $data['nickname'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput"><?= $data['email'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" name="company_name" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"><?= $data['company_name'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control select2" name="country">
                            <option>Armenia</option>
                        </select>
                        <label for="floatingInput"><?= $data['country'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="position" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput"><?= $data['position'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control select2" name="direction">
                            <option>KYC решения (Youmee KYC)</option>
                            <option>Управление персоналом (Youmee HR)</option>
                            <option>Управление талантами (Youmee Child, Youmee Science, Youmee Sport)</option>
                            <option>Партнерство (интеграция с вашим ПО)</option>
                        </select>
                        <label for="floatingInput"><?= $data['direction'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control select2" name="employees">
                            <option>1-15</option>
                            <option>15-50</option>
                            <option>50-100</option>
                            <option>100-250</option>
                            <option>250-500</option>
                            <option>500-1000</option>
                            <option>более 1000</option>
                        </select>
                        <label for="floatingInput"><?= $data['employees'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="company_link" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput"><?= $data['company_link'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="phone" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput"><?= $data['phone'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"><?= $data['password'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="confirm_password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"><?= $data['confirm_password'][isset($_GET['lang']) ? 'en' : 'ru'] ?></label>
                    </div>

                </div>

            </div>


<!--            <div class="form-check form-switch mb-3">-->
<!--                <input class="form-check-input" type="checkbox" name="is_company" role="switch" id="flexSwitchCheckDefault" checked>-->
<!--                <label class="form-check-label" for="flexSwitchCheckDefault">--><?php //= $data['is_company'][isset($_GET['lang']) ? 'en' : 'ru'] ?><!--</label>-->
<!--            </div>-->

            <div class="col-6 mt-3">
                <p class="">* <?= $data['signup_text1'][isset($_GET['lang']) ? 'en' : 'ru'] ?></p>
            </div>
            <div class="col-6 mt-3">
                <button class="btn fillButton"><?= $data['signup'][isset($_GET['lang']) ? 'en' : 'ru'] ?></button>
            </div>
        </div>
    </div>

</header>



<body>