<?php

namespace App\Controllers;


/**
 * Class MainController
 * @package App\Controllers
 */
class MainController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->layout('index');
    }
}