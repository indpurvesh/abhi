<?php

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


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Abhijit\Library\Log\Error::errorHandler');
set_exception_handler('Abhijit\Library\Log\Error::exceptionHandler');

/**
 * Routing
 */
$router = new Abhijit\Library\Route\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
   
$router->dispatch($_SERVER['SCRIPT_NAME']);
