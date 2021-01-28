<?php

session_start();
require_once(__DIR__ . "/../Model/todo.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h2>Create new todo-item</h2>
    <section class = "main-section">
    <form autocomplete="off" class = "form" method="POST" action="../Model/create-todo.php">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="What's on your agenda?">
        </br>
        <label for="text">Text:</label>
        <input type="text" id="text" name="text" placeholder="Description goes here">
        </br>
        <input class = "submit-button" type="submit" value="Submit">
    </form>
    </section>
</body>
</html>