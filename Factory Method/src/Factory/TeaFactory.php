<?php

namespace App\Factory;

use App\Product\{
    ProductInterface,
    Tea
};

class TeaFactory extends FactoryInterface
{
    public function createNewProduct(): ProductInterface
    {
        return new Tea();
    }
}
