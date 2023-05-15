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
        <link rel="icon" href="/images/icons/Mizagene_M_46.png" type="image/x-icon">
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <header>
        <?php
        NavBar::begin([
            'brandLabel' => '<img src="/images/icons/Mizagene_logo.png" alt="Logo" style="width: 150px;"/>',
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
                        Items::getTabElCount($i) == 0 ? "" : '<span style="position: absolute; right: 8px" class="pill-badge ' . (($i != 4 AND $i != 5) ? 'pill-badge-primary' : 'pill-badge-grey') . '">' . Items::getTabElCount($i) . '</span>'
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
                ['label' => 'Usage types', 'url' => ['/admin/usg-type/index'], 'active' => Yii::$app->controller->id == 'usg-type'],
                ['label' => 'Language', 'url' => ['/admin/language/index'], 'active' => Yii::$app->controller->id == 'language'],
                ['label' => 'Reports', 'url' => ['/admin/reports/index'], 'active' => Yii::$app->controller->id == 'reports'],
                [
                    'label' => 'Groups & Regions',
                    'items' => [
                        '<div class="dropdown-header" style="background-color: #ff8900;margin-top: -16px;"></div>',
                        [
                            'label' => '<div class="submenu_item"><span>Groups</span></div>',
                            'url' => '/admin/group/index'
                        ],
                        [
                            'label' => '<div class="submenu_item"><span>Regions</span></div>',
                            'url' => '/admin/region/index'
                        ],
                    ],
                    'active' => in_array(Yii::$app->controller->id, array('group', 'region'))
                ],
                ['label' => '<span style="margin-left: 50px">Hi, <b>' . Yii::$app->admin->getIdentity()->username . '</b></span>'],
                ['label' => '<img src="/images/icons/logout.png" style="width: 20px; margin-left: -12px; margin-top: -4px;">', 'url' => ['/admin/logout']],
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
    <?php  Yii::$app->getView()->registerJsFile(
        '@web/js/admin.js',
        ['depends' => [\yii\web\JqueryAsset::class]]
    ); ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>