<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /login");
    exit();
}

require_once dirname(dirname(__DIR__)) . "/config/path.php";

$title = "Settings";
$page = "settings";

ob_start(); 
include dirname(__DIR__) . "/views/settings.php";
$MainContent = ob_get_clean();

require_once dirname(__DIR__) . "/template.php";
