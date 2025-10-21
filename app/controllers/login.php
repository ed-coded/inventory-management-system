<?php
session_start();
require_once dirname(dirname(__DIR__)) . "/config/db.php";
require_once dirname(dirname(__DIR__)) . "/config/path.php";
require dirname(__DIR__) . "/functions.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    try {
        $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user) {
            
            if (password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                header("Location: /dashboard");
                exit();
            }
        }

    } catch (PDOException $e) {
        $error = "Database error " . $e->getMessage();
    }
}
// Dashboard essentials
$title = 'Welcome User';

require dirname(__DIR__) . '/views/login.php';
