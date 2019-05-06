<?php

namespace App\Core;

class Composite extends Component {

    /**
     * @var \SplObjectStorage
     */
    protected $children;
    protected $count = 0;

    public function __construct()
    {
        $this->children = new \SplObjectStorage;
        $this->setCount($this->count);
    }

    /**
     * Объект контейнера может как добавлять компоненты в свой список вложенных
     * компонентов, так и удалять их, как простые, так и сложные.
     */
    public function add(Component $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);

    }

    public function remove(Component $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isComposite(): bool
    {
        return true;
    }

    /**
     * Контейнер выполняет свою основную логику особым образом. Он проходит
     * рекурсивно через всех своих детей, собирая и суммируя их результаты.
     * Поскольку потомки контейнера передают эти вызовы своим потомкам и так
     * далее, в результате обходится всё дерево объектов.
     */
    public function operation(): int
    {
        foreach ($this->children as $child) {
            $this->count = $this->count + $child->operation();
        }

        return $this->count;
    }

}