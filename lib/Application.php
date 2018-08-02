<?php

namespace Abhijit\Library;

use Abhijit\Library\Route\Router;
use Abhijit\Library\Route\RouteComponent;

class Application extends Container {


    protected $basePath;

    public $app;

    protected $router;

    protected $components = [
        RouteComponent::class
    ];

    public function __construct($path = "")
    {
        $this->basePath = $path;
        $this->registerInstance();

        $this->registerErrorHandler();
        $this->registerComponents();
        
        $this->registerModules();
    }


    public function registerInstance() 
    {
        if (null === $this->app) {
            $this->app = $this;
        }
    }

    public function instance() 
    {
        return $this->app;
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


    public function registerComponents() 
    {

        foreach($this->components as $component) {
            $componentClass = $this->resolveClass($component);
            $componentClass->init();
        }

        foreach($this->components as $component) {
            $componentClass = $this->resolveClass($component);
            $componentClass->register();
        }
    }


    public function run() 
    {
        
        $this->router->dispatch($_SERVER['SCRIPT_NAME']);
    }

    public function singleton() 
    {
        

    }

    public function resolveClass($class) 
    {
        $object = new $class($this);

        return $object;
    }


    public function bind($key , $object) 
    {
        $this->register($key , $object);
    }
}