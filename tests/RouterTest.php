<?php

namespace Tests;
use Tests\TestCase;
use Tests\Dummy\Model;
use Abhijit\Library\Route\Router;

class RouterTest extends TestCase
{
    /**
     * Base Router Add Test 
     *
     * @return void
     */
    public function testAddRouterTest()
    {
        $router =new Router;

        $router->add('', ['controller' => 'TestController', 'action' => 'test']);
        $routes =  $router->getRoutes();
        $route = $routes['/^$/i'];

        $this->assertEquals($route['controller'], 'TestController');
        $this->assertEquals($route['action'], 'test');
        
    }
    /**
     * Base Router Match Test 
     *
     * @return void
     */
    public function testMatchRouterTest()
    {
        $router =new Router;
        $router->add('', ['controller' => 'TestController', 'action' => 'test']);
      
        $this->assertTrue($router->match(''));
        
    }
}