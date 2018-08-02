<?php

namespace Abhijit\Library\Component;

abstract class RegisterComponent {



    public function __construct($app) 
    {
        $this->app = $app;
    }

    public function bind($key  , $object) 
    {
        $this->bind($key, $object);
    }
}