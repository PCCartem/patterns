<?php

namespace App\Core;

class Route {

    private $regexp;
    private $path;
    private $route;
    private $type;

    private $controller;
    private $action;

    public function __construct($type, $route)
    {
        $path = key($route);
        $route = $route[$path];

        $this->type = $type;
        $this->path = $path;
        $this->route = $route;

        $routeArr = explode(':', $route);

        $this->controller = $routeArr[0];
        $this->action = $routeArr[1];

        $this->regexp = str_replace('<:num>', '([0-9]+)', $path);
        $this->regexp = str_replace('<:any>', '(.+)', $this->regexp);
        $this->regexp = '~'.$this->regexp.'~';

    }

    public function getAction()
    {
        return $this->action;
    }

    public function getObjectOfController()
    {
        return new $this->controller;
    }

    public function getRegexp()
    {
        return $this->regexp;
    }


}
