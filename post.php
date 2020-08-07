<?php
/**
 * Сохранение комментария
 */

require 'bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    throw new Exception('Ошибка при отправке формы');
}

$username = $_POST['username'] ?? '';
$text = $_POST['text'] ?? '';

$username = trim($username);
$text = trim($text);

if (!isset($username[0]) || !isset($text[0])) {
    $_SESSION['message'] = 'Нужно заполнить имя и текст!';
    $_SESSION['message_type'] = 'error';
    header('Location: /');
    exit;
}


$query = App::get('database');

$query->insert('comments', [
    'username' => $username,
    'text' => $text,
    'created_at' => time(),
]);

$_SESSION['message'] = 'Спасибо за комментарий!';
$_SESSION['message_type'] = 'success';
header('Location: /');
