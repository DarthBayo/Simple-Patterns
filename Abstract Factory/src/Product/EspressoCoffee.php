<?php

namespace App\Product;

class EspressoCoffee implements CoffeeInterface
{
    public function __toString(): string
    {
        return 'Espresso coffee';
    }
}