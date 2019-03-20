<?php
/**
    Основной класс приложения и точка входа
 */

namespace App;

use App\Core\Router;

use App\Models\Model;
use App\Controllers\MainController;


class App
{
    public function __construct($config)
    {
        Model::setConnect($config['db']);
    }

    public function run()
    {
        Router::addRoute('GET', [
            '/index' => 'App\Controllers\MainController:actionIndex'
        ]);
        return Router::dispatch();
    }
}