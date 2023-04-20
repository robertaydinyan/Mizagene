<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use app\modules\models\Items;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php $this->registerCssFile('/css/admin.css', ['depends' => ['app\assets\AppAsset']]); ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<div class="preloader">
    <div class="loader"></div>
</div>
<header>
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/images/icons/Mizagene_logo.png" alt="Logo" style="width: 200px;"/>',
        'brandUrl' => '/admin',
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
        'innerContainerOptions' => ['class' => 'container-fluid'],

    ]);
    $tabs = Items::getTabs();
    $pill = Yii::$app->request->get('pill') ?: 1;
    $parameters_sub_menu = array('<div class="dropdown-header" style="background-color: #ff8900;margin-top: -16px;"></div>');
    if ($tabs) {
        foreach ($tabs as $i => $title) {
            $parameters_sub_menu[] = [
                'label' => sprintf('<div class="submenu_item"><img src="/images/icons/%s" class="icon" style="margin-top: 0"><span>%s</span> %s</div>',
                    $title[1],
                    $title[0],
                    Items::getTabElCount($i) == 0 ? "" : '<span style="position: absolute; right: 8px" class="pill-badge ' . ($i != 4 ? 'pill-badge-primary' : 'pill-badge-grey') . '">' . Items::getTabElCount($i) . '</span>'
                ),
                'url' => '/admin/items/index?pill=' . $i
            ];
        }
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'encodeLabels' => false,
        'items' => !Yii::$app->admin->isGuest ? [
            [
                'label' => 'Parameters',
                'items' => $parameters_sub_menu,
                'active' => Yii::$app->controller->id == 'items'
            ],
//            ['label' => '', 'url' => ['/admin/items/index'], ],
            ['label' => 'Users', 'url' => ['/admin/admin/index'], 'active' => Yii::$app->controller->id == 'admin'],
            ['label' => 'Region', 'url' => ['/admin/region/index'], 'active' => Yii::$app->controller->id == 'region'],
            ['label' => 'Language', 'url' => ['/admin/language/index'], 'active' => Yii::$app->controller->id == 'language'],
            ['label' => 'Group', 'url' => ['/admin/group/index'], 'active' => Yii::$app->controller->id == 'group'],
            ['label' => 'Hi, <b>' . Yii::$app->admin->getIdentity()->username . '</b>', 'options' => ['class' => 'underlined-nav-link']],
            ['label' => '<i class="fa fa-sign-out" aria-hidden="true" style="font-size: 23px; padding-left: 0; margin-left: -16px;"></i>', 'url' => ['/admin/logout']],
        ] : []
    ]);
    NavBar::end();
    ?>

</header>

<main role="main" class="flex-shrink-0">
    <div class="container-fluid">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; My Company <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<?php  Yii::$app->getView()->registerJsFile(
    '@web/js/admin.js',
    ['depends' => [\yii\web\JqueryAsset::class]]
); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
