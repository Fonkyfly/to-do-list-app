<?php

session_start();
include_once(__DIR__ . "/todo.php");
$user_id = $_SESSION['user_id'];
$title = $_POST['title'];
$text = $_POST['text'];

createTodo($user_id, $title, $text);

$url = '../View/user-todo-view.php?id=' . $_SESSION['user_id'];

ob_flush();
header('Location:' . $url);
exit();


?>