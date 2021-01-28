<?php
session_start();
include_once(__DIR__ . '/todo.php');
include_once(__DIR__ . '/user.php');

if (isset($_POST['deleteUser'])) {
    $delete = $_POST['deleteUser'];
} else {
    $delete = null;
}

if ($delete == 'Yes') {
    $user_id = $_SESSION['user_id'];
    $todos = userTodos($user_id);
    foreach ($todos as $value) {
        removeTodo($value['id']);
    }
    removeUser($user_id);
}

$url = '../index.php';

ob_flush();
header('Location:' . $url);
exit();
