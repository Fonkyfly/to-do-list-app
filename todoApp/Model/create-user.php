<?php
session_start();
include_once(__DIR__ . '/user.php');

if($_POST['newUser'] == "") {
    $username = 'Anonymous user';
} else { 
    $username = $_POST['newUser'];
}

createUser($username);
$url = '../index.php';

ob_flush();
header('Location:' . $url);
exit();
?>
