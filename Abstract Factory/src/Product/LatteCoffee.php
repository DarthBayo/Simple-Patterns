<?php

namespace App\Product;

class LatteCoffee implements CoffeeInterface
{
    public function __toString(): string
    {
        return 'Latte coffee';
    }
}