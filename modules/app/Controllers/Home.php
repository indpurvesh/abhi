<?php

namespace Abhijit\App\Controllers;

use Abhijit\Library\Controller\BaseController;
use Abhijit\Library\View\View;


/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends BaseController
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $name = "Purvesh";
        
        return new View('Home/index.phtml',['name' => $name]);
    }
}
