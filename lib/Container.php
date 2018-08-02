<?php

namespace Abhijit\Library;

class Container  {


    protected $collection;

    public function register($key  , $object) 
    {
        $this->collection [$key] = $object;

        return $this;
    }


    public function get($key) 
    {
        return $this->collection[$key];
    }
}