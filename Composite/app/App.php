<?php

namespace App;

use App\Components\ConcreteImplementationA;
use App\Components\ConcreteImplementationB;
use App\Core\Abstraction;
use App\Core\Composite;
use App\Core\ExtendAbstraction;
use App\Core\Leaf;


class App
{
    public function run()
    {
        $tree = new Composite();
        $branch1 = new Composite();
        $branch1->add(new Leaf(2));
        $branch1->add(new Leaf(4));
        $branch2 = new Composite;
        $branch2->add(new Leaf(5));
        $branch2->add(new Leaf(5));
        $tree->add($branch1);
        $tree->add($branch2);
        echo $tree->operation();
    }


}