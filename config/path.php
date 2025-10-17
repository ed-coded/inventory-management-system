<?php

/* define("BASE_PATH", dirname(__DIR__));
 */
/* define("BASE_PATH", "./../..");
 */
define('BASE_PATH', dirname(__DIR__)); 

define("APP_PATH", BASE_PATH . "/app");

define("VIEW_PATH", APP_PATH . "/views");

define("PARTIALS_PATH", VIEW_PATH . "/partials");

define("CONTROLLER_PATH", APP_PATH . "/controllers");

define("MODEL_PATH", APP_PATH . "/models");

define("INCLUDE_PATH", BASE_PATH . "/includes");

define("PUBLIC_PATH", BASE_PATH . "/public");