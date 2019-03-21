<?php

namespace App\Core;

/**
 * Class Route
 * @package App\Core
 */
class Route {

    /**
     * @var string
     */
    private $regexp;
    /**
     * @var int|string|null
     */
    private $path;
    /**
     * @var
     */
    private $route;
    /**
     * @var
     */
    private $type;

    /**
     * @var
     */
    private $controller;
    /**
     * @var
     */
    private $action;
    /**
     * @var
     */
    private $attributes;

    /**
     * Route constructor.
     * @param $type
     * @param $route
     */
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

        $path = $this->setNameAttributes($path);

        $this->regexp = str_replace('<:num>', '([0-9]+)', $path);
        $this->regexp = str_replace('<:any>', '(.+)', $this->regexp);
        $this->regexp = '~'.$this->regexp.'~';

    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getObjectOfController()
    {
        return new $this->controller;
    }

    /**
     * @return string
     */
    public function getRegexp()
    {
        return $this->regexp;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $path
     * @return string|string[]|null
     */
    private function setNameAttributes($path)
    {
        preg_match_all('~<(.+?):.+?>~', $path, $attributes);
        $this->attributes = $attributes[1];
        return preg_replace('~<(.+?):(.+?)>~', '<:$2>', $path);
    }

    /**
     * @return mixed
     */
    public function getNameAttributes()
    {
        return $this->attributes;
    }

}
