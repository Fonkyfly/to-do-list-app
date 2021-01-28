<?php

session_start();
require_once(__DIR__ . "/../Model/todo.php");


$id = $_GET['todo_id'];
$todo = viewTodo($id);
$_SESSION['todo_id'] = $id;

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
    <h2>Edit todo</h2>
    <section class = "main-section">
    <form autocomplete="off" method="POST" action="../Model/edit-todo.php">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $todo['title']?>">
        </br>
        <label for="text">Text:</label>
        <input type="text" id="text" name="text" value="<?php echo $todo['text']?>">
        </br>
        </br>
        <label for="isDone">Task finished?</label>
        <input type="checkbox" name="isDone" id="isDone" value="Yes">
        </br>
        <label for="isDone">Delete task?</label>
        <input type="checkbox" name="delete" id="delete" value="Yes">
        </br>
        <input class="submit-button" type="submit" value="Submit">
    </form>
    </section>
</body>
</html>