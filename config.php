<?php

return [
    'site_name' => 'Сайт Future',
    'database' => [
        'name' => 'php_comments',
        'host' => '127.0.0.1',
        'username' => 'mysql',
        'password' => 'mysql',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]
    ],
];
