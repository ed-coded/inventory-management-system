<?php

require_once dirname(__DIR__) .'/config/assetPath.php';

/* function dd($value){
    echo "<pre>";
    var_dump($value); 
    echo "</pre>";
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
} */

// config/path.php

/* if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}

if (!defined('PUBLIC_PATH')) {
    define('PUBLIC_PATH', ROOT_PATH . '/public');
}

// ✅ Asset helper
if (!function_exists('asset')) {
    function asset($path) {
        // Detect if project is inside a subfolder like /inventory-management-system/
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);
        $base = rtrim(str_replace('\\', '/', $scriptName), '/');
        return $base . '/asset/' . ltrim($path, '/');
    }
} */
if (!function_exists('asset')) {
    function asset($path) {
        $base = rtrim($_SERVER['SCRIPT_NAME'], '/');
        $baseDir = str_replace('/index.php', '', $base);
        return $baseDir . '/asset/' . ltrim($path, '/');
    }
}

