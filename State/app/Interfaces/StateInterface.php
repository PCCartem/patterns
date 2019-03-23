<?php

namespace App\Interfaces;

use App\Interfaces\ContextInterface;

interface StateInterface {
    public function setContext(ContextInterface $context);
}