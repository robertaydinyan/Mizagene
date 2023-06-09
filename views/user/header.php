<?php
//include 'translations.php';
use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;
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
    <link href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/fc-4.2.2/fh-3.3.2/kt-2.9.0/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/sr-1.2.2/datatables.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<div class="text-center preloader d-none" style="width: 100%; height: 100%; z-index: 99999; position: absolute; background: #f5f5f5; justify-content: center; align-items: center">
    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<header>
    <nav class="navbar navbar-dark bg-light" style="height: 73px">
        <div class="container-fluid">
                <a class="" style="margin-left: 11px" href="/">
                    <img class="navbar-brand mx-0 dashLogoMax" src="/images/logo.png" alt="Logo" width="200" height="55">
                    <img class="navbar-brand mx-0 dashLogoMin ms-2" src="/images/logo.png" alt="Logo" width="" height="55" style="display: none;">
                </a>
<!--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
                        <?php if (!Yii::$app->user->isGuest): ?>
                            <div class="dropdown me-3 menuDrop">
                                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php if (Yii::$app->user->identity->me) { ?><img src="<?= str_replace("/var/www/youmee/web/", "", Yii::$app->user->identity->me->image) ?>" alt="" style="width: 25px; height: 25px; object-fit: cover; border-radius: 100%"> <?php } else { ?><i class="fa-solid fa-circle-user fa-xl me-2" style="color: #003C46;"></i><?php } ?>
<!--                                    <img src="" alt="" width="32" height="32" class="rounded-circle me-2">-->
                                    <span>Hi, <strong><?= Yii::$app->user->identity->username ?></strong>!</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end text-small shadow">
                                    <li><a class="dropdown-item" href="/settings">Settings</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <?php $form = ActiveForm::begin([
                                    'class' => 'logout-form',
                                    'action' => ['site/logout'],
                                    'method' => 'post',
                                ]);
                                ?>

                                        <button type="submit" class="dropdown-item">Sign Out</button>

                                <?php ActiveForm::end(); ?>
                                    </li>
                                </ul>
                            </div>


                        <button class="d-sm-none me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#smallMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background: none; border: none">
                            <i class="fa-solid fa-bars fa-xl" style="color: #d23ae1;"></i>
                        </button>
                        <?php endif; ?>
            <?php if (Yii::$app->user->isGuest): ?>
            <a href="/" class="me-3" type="button"  style="background: none; border: 1px solid rgb(210, 58, 225); padding: 5px; border-radius: 5px; text-decoration: none; color: rgb(210, 58, 225);">
                Sign In
            </a>
            <?php endif; ?>
        </div>
    </nav>
</header>
<body style="height: 100vh; display: flex; flex-direction: column; overflow-x: hidden!important; background: #f5f5f5">
<div class="container-fluid heightError">
    <div class="row w-100 ms-0 h-100">
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 flex-column flex-shrink-0 p-3 pt-2 px-0 bg-light bigMenu"  style="width: 90px; display: flex">
        <?php if (!Yii::$app->user->isGuest): ?>
            <ul class="nav nav-pills flex-column mb-auto sidebar">
                <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->me): ?>
                    <li class="nav-item text-center">
                        <a href="/subject?id=<?= Yii::$app->user->identity->me->public_id ?>&rep=3" class="nav-link link-dark px-2">
                            <img src="<?= str_replace('/var/www/youmee/web/', '', Yii::$app->user->identity->me->image) ?>" alt="" style="<?= Yii::$app->controller->action->id == 'subject' ? 'width: 60px; height: 60px;' : 'width: 50px; height: 50px;' ?> border-radius: 13px; object-fit: cover" ">
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item text-center">
                    <a href="/add-subject" class="nav-link link-dark px-2" aria-current="page">
                        <img src="/images/add-photo_<?= Yii::$app->controller->action->id == 'add-subject' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'add-subject' ? 'active' : '' ?>">
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a href="/all-subjects<?= (Yii::$app->user->identity->id == 17 || Yii::$app->user->identity->id == 4) ? '?type=my' : '' ?>" class="nav-link link-dark px-2">
                        <img src="/images/list_<?= Yii::$app->controller->action->id == 'all-subjects' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'all-subjects' ? 'active' : '' ?>">
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a href="/connections" class="nav-link link-dark px-2">
                        <img src="/images/connections_<?= Yii::$app->controller->action->id == 'connections' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'connections' ? 'active' : '' ?>">
                    </a>
                </li>

                <?php if (!Yii::$app->user->isGuest && (Yii::$app->user->identity->id == 4 || Yii::$app->user->identity->id == 17)): ?>
                    <li class="nav-item text-center">
                        <a href="/analytics" class="nav-link link-dark px-2">
                            <img src="/images/analysis_<?= Yii::$app->controller->action->id == 'analytics' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'analytics' ? 'active' : '' ?>">
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
<!--            <hr>-->
<!--            <div class="dropdown">-->
<!--                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">-->
<!--                    <strong>mdo</strong>-->
<!--                </a>-->
<!--                <ul class="dropdown-menu text-small shadow">-->
<!--                    <li><a class="dropdown-item" href="#">New project...</a></li>-->
<!--                    <li><a class="dropdown-item" href="#">Settings</a></li>-->
<!--                    <li><a class="dropdown-item" href="#">Profile</a></li>-->
<!--                    <li><hr class="dropdown-divider"></li>-->
<!--                    <li><a class="dropdown-item" href="#">Sign out</a></li>-->
<!--                </ul>-->
<!--            </div>-->
        <?php endif; ?>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 flex-column flex-shrink-0 p-3 pt-2 px-0 bg-light offcanvas offcanvas-end" id="smallMenu" style="width: 90px; display: flex">
            <?php if (!Yii::$app->user->isGuest): ?>
                <ul class="nav nav-pills flex-column mb-auto sidebar">
                <li class="nav-item text-center">
                    <a href="#" class="nav-link link-dark px-2" aria-current="page">
                        <img src="/images/favicon.png" alt="Logo" width="70">
                    </a>
                </li>
                <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->me): ?>
                    <li class="nav-item text-center">
                        <a href="/subject?id=<?= Yii::$app->user->identity->me->public_id ?>&rep=3" class="nav-link link-dark px-2">
                            <img src="<?= str_replace('/var/www/youmee/web', '', Yii::$app->user->identity->me->image) ?>" alt="" style="<?= Yii::$app->controller->action->id == 'subject' ? 'width: 60px; height: 60px;' : 'width: 50px; height: 50px;' ?> border-radius: 13px; object-fit: cover" ">
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item text-center">
                    <a href="/add-subject" class="nav-link link-dark px-2" aria-current="page">
                        <img src="/images/add-photo_<?= Yii::$app->controller->action->id == 'add-subject' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'add-subject' ? 'active' : '' ?>">
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a href="/all-subjects<?= (Yii::$app->user->identity->id == 17 || Yii::$app->user->identity->id == 4) ? '?type=my' : '' ?>" class="nav-link link-dark px-2">
                        <img src="/images/list_<?= Yii::$app->controller->action->id == 'all-subjects' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'all-subjects' ? 'active' : '' ?>">
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a href="/connections" class="nav-link link-dark px-2">
                        <img src="/images/connections_<?= Yii::$app->controller->action->id == 'connections' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'connections' ? 'active' : '' ?>">
                    </a>
                </li>

                <li class="nav-item text-center d-sm-none">
                    <a href="/settings" class="nav-link link-dark px-2">
                        <img src="/images/setting_<?= Yii::$app->controller->action->id == 'settings' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'settings' ? 'active' : '' ?>">
                    </a>
                </li>
                <li class="nav-item text-center d-sm-none">
                    <?php $form = ActiveForm::begin([
                        'class' => 'logout-form d-flex justify-content-center',
                        'action' => ['site/logout'],
                        'method' => 'post',
                    ]);
                    ?>
                    <button type="submit " class="nav-link link-dark mx-auto">
                        <img src="/images/logout.png" alt="" width="50"">
                    </button>
                    <?php ActiveForm::end(); ?>
                </li>
            </ul>
            <!--            <hr>-->
            <!--            <div class="dropdown">-->
            <!--                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">-->
            <!--                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">-->
            <!--                    <strong>mdo</strong>-->
            <!--                </a>-->
            <!--                <ul class="dropdown-menu text-small shadow">-->
            <!--                    <li><a class="dropdown-item" href="#">New project...</a></li>-->
            <!--                    <li><a class="dropdown-item" href="#">Settings</a></li>-->
            <!--                    <li><a class="dropdown-item" href="#">Profile</a></li>-->
            <!--                    <li><hr class="dropdown-divider"></li>-->
            <!--                    <li><a class="dropdown-item" href="#">Sign out</a></li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <?php endif; ?>

        </div>
        <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-12 pe-0 mb-3 mobileCol ps-0 ps-sm-2 h-100" style="width: calc(100% - 90px); background: #f5f5f5;">



