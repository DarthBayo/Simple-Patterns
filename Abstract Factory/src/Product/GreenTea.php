<?php

namespace App\Product;

class GreenTea implements TeaInterface
{
    public function __toString(): string
    {
        return 'Green tea';
    }
}