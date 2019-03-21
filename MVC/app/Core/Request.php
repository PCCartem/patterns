<?php

namespace App\Core;

/**
 * Class Request
 * @package App\Core
 */
class Request {
    /**
     * @var
     */
    private static $method;
    /**
     * @var
     */
    private static $currentUrl;
    /**
     * @var array
     */
    private static $fullAttributes = [];

    /**
     *
     */
    public static function init()
    {
        self::$method = $_SERVER['REQUEST_METHOD'];
        self::$currentUrl = self::getCurrentUrl();
    }

    /**
     * @return mixed
     */
    public static function getMethod() {
        return self::$method;
    }

    /**
     * @return mixed
     */
    public static function getCurrentUrl()
    {
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    }

    /**
     * @return array
     */
    public static function getParams() {
        if(self::$method === 'GET') {
            return $_GET;
        }
        if(self::$method === 'POST') {
            return $_GET;
        }
        if(self::$method === 'PUT' || self::$method === 'DELETE') {
            parse_str(file_get_contents("php://input"),$post_vars);
            return $post_vars;
        }
        return [];
    }

    /**
     * @param $attributes
     * @param $values
     */
    public static function setValueAttributes($attributes, $values) {
        array_shift($values);
        $requestAttributes = [];
        foreach ($attributes as $key => $attribute) {
            $requestAttributes[$attributes[$key]] = $values[$key];
        }
        self::$fullAttributes = $requestAttributes;
    }

    /**
     * @return array
     */
    public static function getAttributes(): array
    {
        return self::$fullAttributes;
    }
}
