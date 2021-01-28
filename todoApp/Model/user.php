<?php

include_once(__DIR__ . '/../pdo/db.php');

function createUser($username)
{
    $pdo = connectDB();
    $sql = "INSERT INTO users (username) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
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
    $user = $row['username'];
    return $user;
}

function viewNewUser()
{
    $pdo = connectDB();
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $user = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $user = $row;
    }
    return $user;
}

function viewUsers()
{
    $pdo = connectDB();
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    $users = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        array_push($users, $row);
    }
    return $users;
}
