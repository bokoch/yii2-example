<?php
return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/main.php',
    require __DIR__ . '/main-local.php',
    require __DIR__ . '/news.php',
    [
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=localhost;dbname=yii2advanced_test',
            ]
        ],
    ]
);
