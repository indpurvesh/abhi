<?php

use Abhijit\Library\Application;

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
 
define('BASE_PATH', dirname(__DIR__));


require BASE_PATH . '/vendor/autoload.php';

$app = new Application(__DIR__ . "/..");



/**
 * Routing
 */
$app->run();