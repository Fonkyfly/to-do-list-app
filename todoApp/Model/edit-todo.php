<?php

session_start();
include_once(__DIR__ . "/todo.php");

$title = $_POST['title'];
$text = $_POST['text'];

if (isset($_POST['isDone'])) {
    $isDone = $_POST['isDone'];
} else {
    $isDone = null;
}

$id = $_SESSION['todo_id'];

if (isset($_POST['delete'])) {
    $delete = $_POST['delete'];
} else {
    $delete = null;
}

changeTodoTitle($title, $id);
changeTodoText($text, $id);

if ($isDone == 'Yes') {
    changeTodoDone($id);
} else {
    todoUndone($id);
}

if ($delete == 'Yes') {
    removeTodo($id);
}

$url = '../View/user-todo-view.php?id=' . $_SESSION['user_id'];

ob_flush();
header('Location:' . $url);
exit();
