<?php

namespace App;

use App\Builder\CoffeeBuilder;

class Kitchen
{
    private CoffeeBuilder $builder;

    public function setBuilder(CoffeeBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function coffeeAndSugar(): void
    {
        $this->builder->addWater();
        $this->builder->addSugar();
    }

    public function coffeeMilfAndSugar(): void
    {
        $this->builder->addMilk();
        $this->builder->addSugar();
    }
}
