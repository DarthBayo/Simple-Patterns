<?php

namespace App\Product;

class Coffee
{
    public $parts = [];

    public function listParts()
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}
