<?php
require_once __DIR__ . '/../models/User.php'; // optional: if you have a User model
require_once __DIR__ . '/../helpers/Mailer.php'; // optional

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    if (empty($email)) {
        echo json_encode(['status' => 'error', 'message' => 'Email is required']);
        exit;
    }

    // Check if user exists
    $stmt = $mysql->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    // Always return success (for security reasons)
    if ($user) {
        // You can generate a reset token and email it here
        // Example: save token in DB
        $token = bin2hex(random_bytes(32));
        $stmt = $mysql->prepare("UPDATE users SET reset_token = ?, reset_expires = DATE_ADD(NOW(), INTERVAL 15 MINUTE) WHERE email = ?");
        $stmt->bind_param('ss', $token, $email);
        $stmt->execute();

        // Send email (optional)
        // sendResetEmail($email, $token);
    }

    echo json_encode(['status' => 'ok']);
}
