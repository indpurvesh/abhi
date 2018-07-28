<?php

namespace Abhijit\Library\Controller;

/**
 * Base controller
 *
 */
abstract class BaseController
{

    /**
     * Parameters from the matched route
     * @var array
     */
    protected $routeParams = [];

    /**
     * Class constructor
     *
     * @param array $route_params  Parameters from the route
     *
     * @return void
     */
    public function __construct($routeParams)
    {
        $this->routeParams = $routeParams;
    }


    /**
     * Get All the Route Params for the Controller
     * @return array $route_params;
     */
    public function allRouteParams() 
    {
        return $this->routeParams;
    }

}
