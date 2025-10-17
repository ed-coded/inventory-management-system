<?php
require_once dirname(dirname(__DIR__)) . "/config/path.php";

$title = "Suppliers";
$page = "suppliers";

ob_start();
require dirname(__DIR__) . "/views/suppliers.php";
$MainContent = ob_get_clean();

require dirname(__DIR__) . "/template.php";
