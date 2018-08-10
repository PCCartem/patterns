<?php
/**
 * Created by PhpStorm.
 * User: pccartem
 * Date: 11.08.18
 * Time: 1:33
 */

namespace App\Controllers;


class MainController extends Controller
{
    public function actionIndex()
    {
        return $this->layout('index');
    }
}