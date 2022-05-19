<?php

namespace App\Product;

abstract class ProductInterface
{
    function productName(): string
    {
        $fullPath = get_class($this);
        $explodedPath = explode('\\', $fullPath);
        $className = $explodedPath[count($explodedPath)-1];

        return "I'm a $className";
    }
}
