<?php
include_once(__DIR__ .'/Model/user.php');
include_once(__DIR__ .'/Model/todo.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to to-do-app!</h1>
    <section class="main-section">Please select user below. If your user is not in the list, you may use the "Create
     new user" option.</br>
        <ul>
            <?php
            $users = viewUsers();
            foreach ($users as $value) {
                echo "<li class = 'useritem'><a class='aignore' href='View/user-todo-view.php?id=".$value['id']."'>"
                . $value['username']."</a></li>";
            }
            ?>
        </ul>
        <form autocomplete="off" method="POST" action="Model/create-user.php">
            <label for="newUser">Create new user:</label>
            <input class = "text-box" type="text" id="newUser" name="newUser" placeholder="John Doe">
            <input class = "submit-button" type="submit" value="Submit">
        </form>
    </section>
</body>
</html>