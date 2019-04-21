<?php

namespace App;

use App\Collections\ConcreteCollection;

class App
{
    public function run()
    {
        $collection = new ConcreteCollection();
        $collection->addItem("First");
        $collection->addItem("Second");
        $collection->addItem("Third");

        echo "Straight traversal:\n";
        foreach ($collection->getIterator() as $item) {
            echo $item . "\n";
        }

        echo "\n";
        echo "Reverse traversal:\n";
        foreach ($collection->getReverseIterator() as $item) {
            echo $item . "\n";
        }
    }
}