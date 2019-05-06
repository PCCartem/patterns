<?php

namespace App\Core;


class Decorator implements Component {
    /**
     * @var Component
     */
    protected $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    /**
     * Декоратор делегирует всю работу обёрнутому компоненту.
     */
    public function operation(): string
    {
        return $this->component->operation();
    }
}