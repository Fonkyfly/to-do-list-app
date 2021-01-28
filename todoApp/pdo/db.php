<?php
function connectDB()
{
  // Localhost: '127.0.0.1'
    $host = 'localhost';
    $db = 'todolist';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8';

  // Data Source Name
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  // PDO: Php Data Object
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];


    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        return $pdo;
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), $e->getCode());
    }
}
