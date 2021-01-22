<?php

include(__DIR__ .'/Model/user.php');
include(__DIR__ .'/Model/todo.php');

// createTodo(1, 'Baka bröd', 'Köp mjöl och jäst');


// viewUserTodos(3);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to to-do-app!</h1>
    <section>Please select user below. If your user is not in the list, you may use the "Create new user" option.</br>
        <ul>
            <?php
                viewUsers();
            ?>
        </ul>
        <form>
            <label for="newUser">Create new user:</label>
            <input type="text" id="newUser" name="newUser" placeholder="John Doe">
            <input type="submit" value="Submit">
        </form>
        
    </section>
    
</body>
</html>

