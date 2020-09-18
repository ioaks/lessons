<?php
session_start();

$text = $_POST['text'];
$pdo = new PDO('mysql:host=localhost; dbname=people', 'mysql', 'mysql');

$sql = 'SELECT * FROM input WHERE text=:text';
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch( PDO::FETCH_ASSOC);

if (!empty($task)) {
    $message = 'Такая запись уже существует.';
    $_SESSION['danger'] = $message;

    header('Location:/task_10.php');
}

$sql = 'INSERT INTO input (text) VALUES (:text)';
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

if (isset($task)) {
    $message = 'Запись успешно добавлена.';
    $_SESSION['success'] = $message;

    header('Location:/task_10.php');
}

header('Location:/task_10.php');