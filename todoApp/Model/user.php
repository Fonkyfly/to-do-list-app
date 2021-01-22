<?php

include(__DIR__ . '/../pdo/db.php');
// CRUD

function createUser($username, $password)
{
    $pdo = connectDB();
    $sql = "INSERT INTO users (username, password, id) VALUES (?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $password]);
}

function removeUser($id)
{
    $pdo = connectDB();
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}

function changeUsername($username, $id)
{
    $pdo = connectDB();
    $sql = "UPDATE users SET username = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $id]);
}

function viewUser($id)
{
    $pdo = connectDB();
    $sql = "SELECT * FROM users WHERE id = $id";
    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($row['username']);
    var_dump($row['id']);
}

function viewUsers()
{
    $pdo = connectDB();
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo '<li>';
        var_dump($row['username']);
        var_dump($row['id']);
        echo '</li>';
    }
}