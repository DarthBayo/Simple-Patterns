<?php

require __DIR__ . '/vendor/autoload.php';

use App\Builder\CoffeeBuilder;
use App\Kitchen;

$kitchen = new Kitchen();
$coffeeBuilder = new CoffeeBuilder();

$kitchen->setBuilder($coffeeBuilder);

echo 'Create coffee with sugar:' . PHP_EOL;
$kitchen->coffeeAndSugar();
$coffeeBuilder->getProduct()->listParts();

echo 'Create coffee with milk and sugar:' . PHP_EOL;
$kitchen->coffeeMilfAndSugar();
$coffeeBuilder->getProduct()->listParts();
