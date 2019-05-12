<?php

namespace App;

use App\Core\ConcreteBuilder1;
use App\Core\Director;

class App
{
    public function run()
    {

        $director = new Director();
        $this->clientCode($director);

    }

    public function clientCode(Director $director)
    {
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        echo "Standard basic product:\n";
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        echo "Standard full featured product:\n";
        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        // Помните, что паттерн Строитель можно использовать без класса Директор.
        echo "Custom product:\n";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }
}