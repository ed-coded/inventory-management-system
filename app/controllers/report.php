<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /login");
    exit();
}

require_once dirname(dirname(__DIR__)) . "/config/path.php";
/* include '../functions.php'; */

// Dashboard essentials
$title = "Report";
$page = "report";

ob_start();
require dirname(__DIR__) . "/views/report.php";
$MainContent = ob_get_clean();

require dirname(__DIR__) . "/template.php";
