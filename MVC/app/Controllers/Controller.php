<?php
namespace App\Controllers;

use App\Core\Request;

/**
 * Class Controller
 * @package App\Controllers
 */
class Controller
{
    /**
     * @var \App\Views\View|null
     */
    public $view = null;
    /**
     * @var Request
     */
    protected $request = Request::class;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        if(is_null($this->view)){
            $this->view = new \App\Views\View();
        }
    }

    /**
     * @return mixed
     */
    protected function getParams() {
        return $this->request::getParams();
    }

    /**
     * @param $tmpPath
     * @param array $data
     * @return string
     */
    public function render($tmpPath, $data = [])
    {
        return $this->view->render($tmpPath, $data);
    }

    /**
     * @param $tmpPath
     * @param array $data
     * @return string
     */
    public function layout($tmpPath, $data = [])
    {
        return $this->view->layout($tmpPath, $data);
    }

}