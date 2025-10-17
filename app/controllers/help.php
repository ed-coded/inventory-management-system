<?php
require_once dirname(dirname(__DIR__)) . "/config/path.php";

$title = "Help & Support";
$page = "help";

ob_start(); 
include dirname(__DIR__) . "/views/help.php";
$MainContent = ob_get_clean();

require_once dirname(__DIR__) . "/template.php";
