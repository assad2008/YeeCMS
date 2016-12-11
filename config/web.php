<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'yeecms',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'yeecmscWSliKq975OIoFn_FVHjJOz3GUZiyy9g',
        ],
        'session' => [
            'name' => 'yeecms',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error'],
                    'logFile' => '@app/runtime/logs/' . date("Ymd") . '.app.log',
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            "suffix" => ".html",
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];

$config["modules"]["backend"] = [
        'class' => 'app\modules\backend',
    ];

return $config;
