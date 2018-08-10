<?php
/**
 * Created by PhpStorm.
 * User: pccartem
 * Date: 11.08.18
 * Time: 1:33
 */

namespace App\Controllers;


class Controller
{
    public $view = null;

    public function __construct()
    {
        if(is_null($this->view)){
            $this->view = new \App\Views\View();
        }
    }
    
    public function render($tmpPath, $data = [])
    {
        return $this->view->render($tmpPath, $data);
    }

    public function layout($tmpPath, $data = [])
    {
        return $this->view->layout($tmpPath, $data);
    }

}