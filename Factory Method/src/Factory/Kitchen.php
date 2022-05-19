<?php

namespace App\Factory;

use App\Product\{
    ProductInterface,
    Tea,
    Coffee
};

class Kitchen extends FactoryInterface
{
    public function createNewProduct(bool $wantCoffee = false): ProductInterface
    {
        if ($wantCoffee) {
            return new Coffee();
        }

        return new Tea();
    }
}
