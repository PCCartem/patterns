<?php
namespace App\Components;

class RussianButAngry
{

    private $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function request(): string
    {
        $res = $this->component->request() . " AAA! УЙДИ Я ЗОЛ!";
        return $res;
    }
}