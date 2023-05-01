<?php
//include 'translations.php';
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
    <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/b-2.3.6/sb-1.4.2/sp-2.1.2/datatables.min.css" rel="stylesheet"/>
</head>
<header>
    <nav class="navbar navbar-dark bg-light" style="height: 73px">
        <div class="container-fluid">
                <a class="" style="margin-left: 33px" href="<?php
                $lang = Yii::$app->request->get('lang');
                $newUrl = Url::toRoute(['/', 'lang' => $lang]);
                $currentUrl = Yii::$app->request->url;
                echo $newUrl;
                ?>"><img class="navbar-brand" src="/images/logo.png" alt="Logo" width="200" height="55"></a>
<!--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
                        <div class="dropdown me-3">
                            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <span>Hi, <strong>George</strong>!</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end text-small shadow">
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
        </div>
    </nav>
</header>
<body style="height: 100vh; display: flex; flex-direction: column">
<div class="container-fluid row">
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 d-flex flex-column flex-shrink-0 p-3 pt-2 px-0 bg-light" style="width: 90px">
            <ul class="nav nav-pills flex-column mb-auto sidebar">
                <li class="nav-item text-center">
                    <a href="/add-subject" class="nav-link link-dark pe-2" aria-current="page">
                        <img src="/images/add-photo_<?= Yii::$app->controller->action->id == 'add-subject' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'add-subject' ? 'active' : '' ?>">
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a href="/all-subjects" class="nav-link link-dark pe-2">
                        <img src="/images/list_<?= Yii::$app->controller->action->id == 'all-subjects' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'all-subjects' ? 'active' : '' ?>">
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a href="#" class="nav-link link-dark pe-2">
                        <img src="/images/connections_<?= Yii::$app->controller->action->id == 'service' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'service' ? 'active' : '' ?>">
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a href="#" class="nav-link link-dark pe-2">
                        <img src="/images/HR_<?= Yii::$app->controller->action->id == 'service' ? '2' : '1' ?>.png" alt="" width="50" class="<?= Yii::$app->controller->action->id == 'service' ? 'active' : '' ?>">
                    </a>
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
        </div>
        <div class="d-flex col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11 pe-0">



