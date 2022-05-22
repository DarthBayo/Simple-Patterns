<?php

namespace App\Product;

class OolongTea implements TeaInterface
{
    public function __toString(): string
    {
        return 'Oolong tea';
    }
}