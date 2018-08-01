<?php

namespace Abhijit\Library;

use Abhijit\Library\Route\Router;

class Application {


    protected $basePath;
    protected $router;

    public function __construct($path = "")
    {
        $this->basePath = $path;
        $this->registerModules();

        $this->registerErrorHandler();
        $this->registerRouter();
        
    }


    public function registerModules() 
    {
        
    }

    public function registerErrorHandler() 
    {
        error_reporting(E_ALL);
        set_error_handler('Abhijit\Library\Log\Error::errorHandler');
        set_exception_handler('Abhijit\Library\Log\Error::exceptionHandler');

    }


    public function registerRouter() 
    {
        $this->router = new Router();

        // Add the routes
        $this->router->add('', ['controller' => 'Home', 'action' => 'index']);
        $this->router->add('{controller}/{action}');
        
    }


    public function run() 
    {
        $this->router->dispatch($_SERVER['SCRIPT_NAME']);
    }
}