<?php

require __DIR__ . '/vendor/autoload.php';

use App\Factory\{
    CoffeeFactory,
    TeaFactory,
    Kitchen
};
use App\Product\ProductInterface;

function randomBoolValue(): bool
{
    return rand() % 2 === 0;
}

function listProductsName(ProductInterface ...$products)
{
    foreach ($products as $product) {
        echo $product->productName().PHP_EOL;
    }
}

$coffeeFactory = new CoffeeFactory();
$teaFactory = new TeaFactory();
$kitchen = new kitchen();

$c1 = $coffeeFactory->createNewProduct();

$t1 = $teaFactory->createNewProduct();

$r1 = $kitchen->createNewProduct();
$r2 = $kitchen->createNewProduct(randomBoolValue());
$r3 = $kitchen->createNewProduct(randomBoolValue());
$r4 = $kitchen->createNewProduct(randomBoolValue());
$r5 = $kitchen->createNewProduct(randomBoolValue());

listProductsName($c1, $t1, $r1, $r2, $r3, $r4, $r5);
