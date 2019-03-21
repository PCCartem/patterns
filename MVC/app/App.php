<?php
/**
    Основной класс приложения и точка входа
 */

namespace App;

use App\Core\Request;
use App\Core\Router;

use App\Models\Model;


class App
{
    public function __construct($config)
    {
        Model::setConnect($config['db']);
        Request::init();
    }

    public function run()
    {
        Router::addRoute('GET', [
            '/<id:num>/<dd:num>' => 'App\Controllers\MainController:actionIndex'
        ]);
        return Router::dispatch();
    }
}