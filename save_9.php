<?php

$text = $_POST['text'];

$pdo = new PDO('mysql:host=localhost; dbname=people', 'mysql', 'mysql');
$sql = 'INSERT INTO input (text) VALUES (:text)';
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
header('Location:/task_9.php');