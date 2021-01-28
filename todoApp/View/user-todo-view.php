<?php
session_start();
include_once(__DIR__ . '/../Model/todo.php');
include_once(__DIR__ . '/../Model/user.php');

$_SESSION['user_id'] = $_GET['id'];
$_SESSION['user'] = viewUser($_SESSION['user_id']);

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
    <h1>Welcome <?php echo $_SESSION['user']?></h1>
    <section class="main-section">
            <ul class = 'todolist'> This is on your agenda!
                <?php
                $todos = userTodos($_SESSION['user_id']);
                foreach ($todos as $value) {
                        echo "<li id =" . $value['id'] . " class = 'todoitem'><div><strong>" . $value['title'].
                        "</strong></div><div>" . $value['text'] . "</div><div><input type = 'checkbox'";
                    if ($value['done'] == 1) {
                            echo "checked='checked'";
                    }
                        echo ">Finished!</div><div><a class='useritem' href='edit-todo-view.php?id=".
                        $_SESSION['user_id'] . "&todo_id=".$value['id']. "'>Edit</a></div></div></li>";
                }
                ?>
            </ul>
        <form class = "form" action="create-todo-view.php">
            <input class = "submit-button" type="submit" value="Create new todo">
        </form>
        <form class = "form" action="../index.php">
            <input class = "submit-button" type="submit" value="Return to index">
        </form>
        <form class = "form" action="delete-user-view.php">
            <input class = "submit-button" type="submit" value="Delete user">
        </form>
    </section>
</body>
</html>
