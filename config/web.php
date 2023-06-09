<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ivLjhYfqCaGBgMuoDvXOlhPtJOvDASm7',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => false,
            'loginUrl' => ['site/login'],
            'identityCookie' => [
                'name' => '_panelUser',
            ]
        ],
        'admin' => [
            'class' => 'yii\web\User',
            'identityClass' => 'app\modules\models\Admin',
            'enableAutoLogin' => true,
            'loginUrl' => ['/admin/login'],
            'identityCookie' => [
                'name' => '_panelAdmin',
            ]
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    'clientId' => '337924835812-t42uuid33rlj493im60g765f07mp6i16.apps.googleusercontent.com',
                    'clientSecret' => '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',
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.google.com', // SMTP server address
                'username' => 'username@example.com', // SMTP account username
                'password' => 'yourpassword', // SMTP account password
                'port' => '587', // SMTP server port
                'encryption' => 'tls', // SMTP encryption type (ssl or tls)
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'admin' => 'Admin/default',
                'admin/<_action:\w*>' => 'Admin/default/<_action>',
                'admin/<controller:[\w\-]+>/<action:[\w\-]+>' => 'Admin/<controller>/<action>',
                'service' => 'site/service',
                'about-technology' => 'site/about-technology',
                'investors' => 'site/investors',
                'partners' => 'site/partners',
                'individual-solutions' => 'site/individual-solutions',
                'personal-solutions' => 'site/personal-solutions',
                'kyc-solutions' => 'site/kyc-solutions',
                'hr-solutions' => 'site/hr-solutions',
                'faq' => 'site/faq',
                'privacy' => 'site/privacy',
                'terms' => 'site/terms',
                'add-subject' => 'user/add-subject',
                'all-subjects' => 'user/all-subjects',
                'settings' => 'user/settings',
                'connections' => 'user/connections',
                'subject' => 'user/subject',
                'allitems' => 'user/allitems',
                'analytics' => 'user/analytics',
//                '' => 'site/login',
//                'signup' => 'site/signup',
            ],
        ],
        'session' => [
            'class' => 'yii\web\Session',
        ],
    ],
    'params' => $params,
    'modules' => [
        'Admin' => [
            'class' => 'app\modules\admin',
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
