<?php

namespace App;



use App\TemplateMethod\ConcreteClass2;
use App\TemplateMethod\TemplateMethod;

class App
{
    public function run()
    {
        $this->use(new ConcreteClass2);
    }

    public function use(TemplateMethod $class)
    {
        $class->templateMethod();
    }
}