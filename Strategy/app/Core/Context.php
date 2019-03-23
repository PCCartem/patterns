<?php
namespace App\Core;

use App\Interfaces\ContextInterface;
use App\Interfaces\StrategyInterface;

class Context implements ContextInterface {

    protected $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->setStrategy($strategy);
    }

    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy()
    {
        $this->strategy->sell();
    }

}