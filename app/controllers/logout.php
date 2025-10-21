<?php
session_start(); // Start session

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect back to login page
header("Location: /");
exit();
