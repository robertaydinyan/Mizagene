<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

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
    </head>
    <body class="d-flex flex-column h-100">
        <?php $this->beginBody() ?>

        <header>
            <?php
                NavBar::begin([
                    'brandLabel' => 'Admin page',
                    'brandUrl' => '/admin',
                    'options' => [
                        'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
                    ],
                ]);
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav'],
                    'items' => [
                        ['label' => 'Users', 'url' => ['/admin/admin/index']],
                        ['label' => 'Items', 'url' => ['/admin/items/index']],
                        ['label' => 'Region', 'url' => ['/admin/region/index']],
                        ['label' => 'Language', 'url' => ['/admin/language/index']],
                        ['label' => 'Group', 'url' => ['/admin/group/index']],
                    ]
                ]);
                NavBar::end();
                ?>
        </header>

        <main role="main" class="flex-shrink-0">
            <div class="container">
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
