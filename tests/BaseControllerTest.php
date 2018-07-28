<?php

namespace Tests;
use Tests\TestCase;
use Abhijit\App\Controllers\Home;
use Abhijit\Library\Controller\BaseController;
use Tests\Dummy\Index;

class BaseControllerTest extends TestCase
{
    /**
     * Base Controller Test 
     *
     * @return void
     */
    public function testBaseController()
    {
        $controller = new Index(['test'=> 'route']);
    
        $this->assertArrayHasKey('test', $controller->allRouteParams());
        $this->assertInstanceOf(Index::class, $controller);
    }
}