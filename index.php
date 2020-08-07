<?php
/*
 * Главная
 */

require 'bootstrap.php';

App::set('title', 'Комментарии');

$query = App::get('database');

$comments = $query->selectAll('comments', 'created_at', 'DESC');

$message = $_SESSION['message'] ?? null;
$message_type = $_SESSION['message_type'] ?? 'success';

// Удалить сообщения после показа
unset($_SESSION['message'], $_SESSION['message_type']);


view('index', [
    'comments' => $comments,
    'message' => $message,
    'message_type' => $message_type
]);
