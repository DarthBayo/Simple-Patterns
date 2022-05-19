<?php

namespace App\Factory;

use App\Product\ProductInterface;

abstract class FactoryInterface
{
    abstract function createNewProduct(): ProductInterface;
}
