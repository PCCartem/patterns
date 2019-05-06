<?php

namespace App\Core;

class Leaf extends Component {

    protected $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function operation() :int
    {
        return $this->price;
    }
}