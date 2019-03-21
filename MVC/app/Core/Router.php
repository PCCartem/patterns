<?php

namespace App\Core;


/**
 * Class Router
 * @package App\Core
 */
class Router
{

    /**
     * @var array
     */
    private static $routes = [];


    /**
     * @param string $type
     * @param array $route
     * @return bool
     */
    public static function addRoute(string $type, array $route): bool
    {
        self::$routes[] = new Route($type, $route);
        return true;
    }


    /**
     * @return array
     */
    public static function getRoutes(): array
    {
        return self::$routes;
    }


    /**
     * @return mixed
     */
    public static function dispatch()
    {

        foreach (self::$routes as $route) {
            if (preg_match($route->getRegexp(), Request::getCurrentUrl(), $attributeValues) && Request::getMethod() == $route->getType()) {
                Request::setValueAttributes($route->getNameAttributes(), $attributeValues);
                return self::execute($route);
            };
        }
        echo 404;
        return false;
    }


    /**
     * @param Route $route
     * @return mixed
     */
    public static function execute(Route $route)
    {
        return call_user_func_array([$route->getObjectOfController(), $route->getAction()], []);
    }




}
