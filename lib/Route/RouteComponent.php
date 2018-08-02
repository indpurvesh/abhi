<?php

namespace Abhijit\Library\Route;

use Abhijit\Library\Component\RegisterComponent;

class RouteComponent extends RegisterComponent
{
    public function init()
    {
    }

    public function register()
    {

        $router  = new Router();
        
        $this->bind('router', $router);

        dd($this->app);

        // Add the routes
        $this->router->add('', ['controller' => 'Home', 'action' => 'index']);
        $this->router->add('{controller}/{action}');

    }

    public function instanceKeys() 
    {
        return ['router'];
    }
}
