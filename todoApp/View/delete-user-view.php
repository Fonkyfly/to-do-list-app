<?php
session_start();
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
    <h2>Delete user <?php echo $_SESSION['user']?> </h2>
    <section class = "main-section">
        <form method="POST" action = "../Model/delete-user.php">
            <label for="deleteUser">Are you sure?</label>
            <input type="checkbox" name="deleteUser" id="deleteUser" value="Yes">
            </br>
            <input class = "submit-button" type="submit" value="Delete">
        </form>
        <form action = "../index.php">
            <input class = "submit-button" type="submit" value = "Return to index">
        </form>
    </section>
</body>
</html>
