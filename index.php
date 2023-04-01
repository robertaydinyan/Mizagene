<?php

ini_set('max_input_vars', 60000);
ini_set('max_execution_time', '12000');
//ini_set('display_errors',0);
//ini_set('error_reporting', 0 );
//define('WP_DEBUG', false);
//define('WP_DEBUG_DISPLAY', false);
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';

// define('NEED_AUTH', false);
// define('NOT_CHECK_PERMISSIONS', true);

// require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$config = require __DIR__ . '/config/web.php';

// require DIR . '/functions.php';
// require DIR . '/bitrix_functions.php';

(new yii\web\Application($config))->run();

// comment out the following two lines when deployed to production
// defined('YII_DEBUG') or define('YII_DEBUG', true);
// defined('YII_ENV') or define('YII_ENV', 'dev');

// require __DIR__ . '/../vendor/autoload.php';
// require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// $config = require __DIR__ . '/../config/web.php';

// (new yii\web\Application($config))->run();
