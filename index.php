<?php

use app\Core\Router;

$microTime = microtime(true);

require_once __DIR__ . '/vendor/autoload.php';

define("ROUTES", require_once(__DIR__ . '/app/config/routes.php'));

const APP = __DIR__ . '/app';
const DS = DIRECTORY_SEPARATOR;

Router::processRequest();

dump(microtime(true) - $microTime);
