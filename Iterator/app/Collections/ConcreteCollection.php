<?php

namespace App\Collections;

use App\Iterators\ConcreteIterator;

class ConcreteCollection implements \IteratorAggregate
{
    private $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator(): \Iterator
    {
        return new ConcreteIterator($this);
    }

    public function getReverseIterator(): \Iterator
    {
        return new ConcreteIterator($this, true);
    }
}