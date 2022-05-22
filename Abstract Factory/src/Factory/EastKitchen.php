<?php

namespace App\Factory;

use App\Product\{
    TeaInterface,
    CoffeeInterface
};
use App\Product\{
    OolongTea,
    LatteCoffee
};

class EastKitchen extends AbstractKitchen
{
    public function createTea(): TeaInterface
    {
        return new OolongTea();
    }
    
    public function createCoffee(): CoffeeInterface
    {
        return new LatteCoffee();
    }
}