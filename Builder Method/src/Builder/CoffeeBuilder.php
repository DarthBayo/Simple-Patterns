<?php

namespace App\Builder;

use App\Product\Coffee;

class CoffeeBuilder implements CoffeeBuilderInterface
{
    private Coffee $coffee;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->coffee = new Coffee();
    }

    public function addWater()
    {
        $this->coffee->parts[] = 'Add More Water';
    }

    public function addSugar()
    {
        $this->coffee->parts[] = 'Add More Sugar';
    }

    public function addMilk()
    {
        $this->coffee->parts[] = 'Add More Milk';
    }

    public function getProduct(): Coffee
    {
        $result = $this->coffee;
        $this->reset();

        return $result;
    }
}
