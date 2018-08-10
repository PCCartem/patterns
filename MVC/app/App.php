<?php
/**
    Основной класс приложения и точка входа
 */

namespace App;


use App\Controllers\MainController;

class App
{
    public function __construct($config)
    {
        $connect = new Models\Model($config['db']);
    }

    public function run()
    {
        $controller = new MainController();

        return $controller->actionIndex();
    }
}