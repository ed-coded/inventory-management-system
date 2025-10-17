<?php
require_once dirname(dirname(__DIR__)) . "/config/path.php";

// Controller: Inventory
$title = "Inventory";
$page = "inventory";

ob_start();

// Example static data — later we’ll pull this from the database
$inventoryData = [
    [
        "product" => "Wireless Mouse",
        "sku" => "WM-342",
        "category" => "Electronics",
        "stock" => 12,
        "supplier" => "TechSource"
    ],
    [
        "product" => "Laptop Bag",
        "sku" => "LB-101",
        "category" => "Accessories",
        "stock" => 58,
        "supplier" => "Bags & Co"
    ],
    [
        "product" => "Bluetooth Keyboard",
        "sku" => "BK-223",
        "category" => "Electronics",
        "stock" => 0,
        "supplier" => "SmartTech"
    ],
];

// Pass data to view
include dirname(__DIR__) . "/views/inventory.php";

$MainContent = ob_get_clean();
require_once dirname(__DIR__) . "/template.php";
