<?php

namespace App\Factory;

use App\Product\{
    ProductInterface,
    Coffee
};

class CoffeeFactory extends FactoryInterface
{
    public function createNewProduct(): ProductInterface
    {
        return new Coffee();
    }
}
