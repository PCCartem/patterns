<?php

namespace App\Core;

use App\Interfaces\MementoInterface;

class ConcreteMemento implements MementoInterface {

    private $state;

    private $date;

    public function __construct(string $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getName(): string
    {
        return $this->date . " / (" . substr($this->state, 0, 9) . "...)";
    }

    public function getDate(): string
    {
        return $this->date;
    }

}