<?php

namespace App\Factory;

use App\Product\{
    TeaInterface,
    CoffeeInterface
};

abstract class AbstractKitchen
{
    abstract function createTea(): TeaInterface;
    abstract function createCoffee(): CoffeeInterface;
}