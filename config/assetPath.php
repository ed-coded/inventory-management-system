<?php
// Get the project base URL dynamically
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];

// Adjust this if your project folder name changes
$baseFolder = '/inventory-management-system/public';

define('BASE_URL', $protocol . '://' . $host . $baseFolder);
define('ASSET_PATH', BASE_URL . '/asset');
