<?php

namespace App\Core;

use App\Core\Route;

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
     * @param array $route
     * @return bool
     */
    public static function addRoute(string $type, array $route): bool
    {
        self::$routes[] = new Route($type, $route);
        return true;
    }


    /**
     * @param array $routes
     */
    public static function getRoutes(): array
    {
        return self::$routes;
    }

    /**
     *
     */
    public static function dispatch()
    {
        foreach (self::$routes as $route) {
            if (preg_match($route->getRegexp(), self::getCurrentUrl(), $params)) {
                $params = is_array(array_shift($params)) ? $params : [];
                return self::execute($route, $params);
            } else {
                //TODO: Exeptions
                echo "404";
            }
        }
    }

    /**
     * @param \App\Core\Route $route
     * @param $params
     */
    public static function execute(Route $route, $params = [])
    {
        return call_user_func_array([$route->getObjectOfController(), $route->getAction()], $params);
    }

    /**
     * @return mixed
     */
    private static function getCurrentUrl()
    {
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    }


}
