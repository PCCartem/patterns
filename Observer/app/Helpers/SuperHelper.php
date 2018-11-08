<?php

namespace App\Helpers;

use App\Api\SuperApi;
use App\Services\SuperService;
use App\Observers\InstagramObserver;
use App\Observers\VkObserver;

class SuperHelper {

    public static $route;
    public static $args;
    public static $verb;

    public static $config;




    public static function route($request = 'index', $config)
    {
        self::$config = $config;

        if(stripos($request, 'api/v1/') !== false) {
            $request = str_replace('api/v1/', '', $request);
            self::toApi($request);
        }

        self::$args = explode('/', rtrim($request, '/'));
        self::$route = array_shift(self::$args);
        if (array_key_exists(0, self::$args) && !is_numeric(self::$args[0])) {
            self::$verb = array_shift(self::$args);
        }

        if(self::$route == '') self::$route = 'index';
        if (method_exists(__CLASS__, self::$route)) {
            $run = self::$route;

            self::render(self::$run());
        }

    }

    public static function toApi($request)
    {

        if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
            $_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
        }

        try {
            $api = new SuperApi($request, $_SERVER['HTTP_ORIGIN']);
            echo $api->processApi();
        } catch (Exception $e) {
            echo json_encode(Array('error' => $e->getMessage()));
        }

    }

    /**
     * Небольшой шаблонизатор
     * @param $tpl
     * @param $data array передаваемые переменные
     * @param $dir string путь до папки с шаблонами
     * @return string|false
     */
    public static function tpl($tpl, $data = [], $dir = '/../Tpl/')
    {
        if (!is_array($data))
            return false;

        $name_tpl_file = __DIR__ . $dir . $tpl . '.tpl';
        if (!is_readable($name_tpl_file))
            return false;

        if (!empty($data))
            extract($data, EXTR_SKIP);

        ob_start();
        require $name_tpl_file;
        return ob_get_clean();
    }

    /**
     * Обёртка формирующая html страницу
     * @param $tpl_content
     * @param array $data
     * @return string
     */
    function layout($tpl_content, $data = [])
    {
        $tpl = self::tpl('header');
        $tpl .= self::tpl($tpl_content, $data);
        $tpl .= self::tpl('footer');
        return $tpl;
    }

    public static function render($html)
    {
        echo $html;
    }


    public function index()
    {
        $service = SuperService::getInstance();
        $service->registerObserver(new InstagramObserver(self::$config));
        $service->registerObserver(new VkObserver(self::$config));
        $posts = $service->getPostsObservers();
        return self::layout('index', [
            'posts' => $posts
        ]);
    }

    public function all()
    {
        return self::layout('all');
    }

    public function add()
    {
        return self::layout('add');
    }

    public function one()
    {
        return self::layout('one');
    }
}