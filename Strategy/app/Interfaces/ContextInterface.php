<?php

namespace App\Interfaces;

interface ContextInterface {

    public function setStrategy(StrategyInterface $strategy);

    public function executeStrategy();

}