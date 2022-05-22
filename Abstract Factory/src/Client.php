<?php

namespace App;

use App\Factory\AbstractKitchen;

class Client
{
    public function __construct(private AbstractKitchen $kitchen)
    {}

    public function OrderingCoffeeAndTea(): string
    {
        $coffee = $this->kitchen->createCoffee();
        $tea = $this->kitchen->createTea();

        return "I just can order $coffee and $tea!";
    }
}