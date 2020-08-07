<?php

/**
 * Подключить шаблон нужной страницы
 */
function view($name, $params = []) {
    extract($params);
    $path = ROOT . '/views/' . $name . '.php';
    require($path);
}

/**
 * Подключить блок в шаблон
 */
function view_include($name, $params = []) {
    extract($params);
    $path = ROOT . '/views/common/' . $name . '.php';
    require($path);
}

