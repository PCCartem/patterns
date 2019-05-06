<?php

namespace App\Core;


class ConcreteComponent implements Component {

    public function operation(): string
    {
        return "ConcreteComponent";
    }
}