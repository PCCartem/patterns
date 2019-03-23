<?php

namespace App\Interfaces;

use App\Interfaces\StateInterface;

interface ContextInterface {
    public function turnState(StateInterface $state);
}