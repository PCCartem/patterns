<?php
require __DIR__ . '/../vendor/autoload.php';

$config = require_once __DIR__."/../config/config.php";

//$service = new \App\Services\SuperService($config);

\App\Helpers\SuperHelper::route($_REQUEST['request']);

