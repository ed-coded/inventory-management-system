<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /login");
    exit();
}

require_once dirname(dirname(__DIR__)) . "/config/path.php";

$title = "Terms and Conditions";
$page = "terms";

ob_start();
require dirname(__DIR__) . "/views/terms.php";
$MainContent = ob_get_clean();

require dirname(__DIR__) . "/template.php";
