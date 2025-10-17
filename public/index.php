<?php
// ===============================
// Bootstrapping
// ===============================
require_once dirname(__DIR__) . '/config/init.php';
require_once dirname(__DIR__) . '/config/path.php';

// Optional: Include helper functions
/* require_once dirname(__DIR__) . '/config/functions.php'; */

// Normalize the URL path (remove query string, trailing slash)
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = rtrim($url, '/');
if ($url === '') $url = '/';

// ===============================
// Route Definitions
// ===============================

$routes = [
    '/' => dirname(__DIR__) . '/app/views/index.php',
    '/login' => dirname(__DIR__) . '/app/controllers/login.php',
    '/signup' => dirname(__DIR__) . '/app/controllers/signup.php',
    '/passwordreset' => dirname(__DIR__) . '/app/controllers/pwdreset.php',
    '/forgotpassword' => dirname(__DIR__) . '/app/controllers/forgotpwd.php',
    '/dashboard' => dirname(__DIR__) . '/app/controllers/dashboard.php',
    '/inventory' => dirname(__DIR__) . '/app/controllers/inventory.php',
    '/suppliers' => dirname(__DIR__) . '/app/controllers/suppliers.php',
    '/report' => dirname(__DIR__) . '/app/controllers/report.php',
    '/salesOrder' => dirname(__DIR__) . '/app/controllers/salesOrder.php',
    '/help' => dirname(__DIR__) . '/app/controllers/help.php',
    '/settings' => dirname(__DIR__) . '/app/controllers/settings.php',
    '/contactUs' => dirname(__DIR__) . '/app/controllers/contact.php',
    '/privacy' => dirname(__DIR__) . '/app/controllers/privacy.php',
    '/terms' => dirname(__DIR__) . '/app/controllers/terms.php'

];

// ===============================
// Route Resolver
// ===============================
if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    http_response_code(404);
    require dirname(__DIR__) . '/app/views/404.php';
}
