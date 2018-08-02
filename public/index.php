<?php

use Abhijit\Library\Application;
 
define('BASE_PATH', dirname(__DIR__));


require BASE_PATH . '/vendor/autoload.php';

$app = new Application(__DIR__ . "/..");

$app->run();