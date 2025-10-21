<?php

require_once __DIR__ . '/env.php'; // load .env first

$host = getenv('DBHOST');
$db   = getenv('DBNAME');
$user = getenv('DBUSER');
$pass = getenv('DBPASSWORD');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}