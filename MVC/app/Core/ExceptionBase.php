<?php

namespace App\Core;

use \Exception;
use App\Views\View;

class ExceptionBase extends Exception
{

    public function __construct($message = null, $code = 500, \Exception $previous = null)
    {
        $view = new View();
        http_response_code($code);
        parent::__construct($message, $code, $previous);
        
        $view->layout('exception', [
            'message' => $message,
            'code' => $code
        ]);
    }
}