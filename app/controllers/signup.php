<?php
session_start();
require_once dirname(dirname(__DIR__)) . "/config/db.php";
require_once dirname(dirname(__DIR__)) . "/config/env.php";
require_once dirname(dirname(__DIR__)) . "/config/path.php";
require dirname(__DIR__) . "/functions.php";

// RETRIEVE THE DATA CLIENT ID FROM THE .ENV FILE
$data_client_id = getenv('DATA_CLIENT_ID');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmpassword = trim($_POST['confirmPassword']);

    try {
        // Check if email exists
        $checkUser = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $checkUser->execute([$email]);
        $user = $checkUser->fetch();

        if ($user) {
            $errorEmail = "Email already registered.";
        } else {
            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert new user
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$username, $email, $hashedPassword]);
            header("Location: /login");
        }
    } catch (PDOException $e) {
        echo "<p style='color:red;'>Database Error: " . $e->getMessage() . "</p>";
    }
}

// Dashboard essentials
$title = 'Inventory Signup';

require dirname(__DIR__) . '/views/signup.php';
