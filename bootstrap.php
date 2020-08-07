<?php

// Для хранения результата отправки формы
session_start();

// Корневая директория проекта
define('ROOT', __DIR__);

require ROOT . '/includes/functions.php';

require ROOT . '/includes/App.php';
require ROOT . '/includes/Connection.php';
require ROOT . '/includes/QueryBuilder.php';
require ROOT . '/includes/Html.php';

set_exception_handler(function ($exception) {
    App::set('title', 'Ошибка');

    $message = 'Извините. На сайте возникла ошибка: ' . $exception->getMessage();

    view('exception', [
        'message' => $message,
    ]);

    exit;
});


$config = require ROOT . '/config.php';
App::set('config', $config);

$pdo = Connection::make(
    App::get('config')['database']
);

$query = new QueryBuilder($pdo);
App::set('database', $query);

App::set('title', App::get('config')['site_name']);



