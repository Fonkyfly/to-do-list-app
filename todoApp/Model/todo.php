<?php

// CRUD

function createTodo($user_id, $title, $text)
{
    $pdo = connectDB();
    $sql = "INSERT INTO todos (user_id, title, text) VALUES (?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id, $title, $text]);
}

function removeTodo($id)
{
    $pdo = connectDB();
    $sql = "DELETE FROM todos WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}

function changeTodoTitle($title, $id)
{
    $pdo = connectDB();
    $sql = "UPDATE todos SET title = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $id]);
}

function changeTodoText($text, $id)
{
    $pdo = connectDB();
    $sql = "UPDATE todos SET text = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$text, $id]);
}

function changeTodoDone($id)
{
    $done = 1;
    $pdo = connectDB();
    $sql = "UPDATE todos SET done = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$done, $id]);
}

function todoUndone($id)
{
    $done = NULL;
    $pdo = connectDB();
    $sql = "UPDATE todos SET done = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$done, $id]);
}

function viewTodo($id)
{
    $pdo = connectDB();
    $sql = "SELECT * FROM todos WHERE id = $id";
    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($row['title']);
    var_dump($row['text']);
}

function viewUserTodos($user_id)
{
    $pdo = connectDB();
    $sql = "SELECT * FROM todos WHERE user_id = $user_id";
    $stmt = $pdo->query($sql);
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        var_dump($row['title']);
        var_dump($row['text']);
        echo '<br>';
    }
}

