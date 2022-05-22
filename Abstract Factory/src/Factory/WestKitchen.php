<?php

namespace App\Factory;

use App\Product\{
    TeaInterface,
    CoffeeInterface
};
use App\Product\{
    GreenTea,
    EspressoCoffee
};

class WestKitchen extends AbstractKitchen
{
    public function createTea(): TeaInterface
    {
        return new GreenTea();
    }
    
    public function createCoffee(): CoffeeInterface
    {
        return new EspressoCoffee();
    }
}