<?php

require __DIR__ . '/vendor/autoload.php';

use App\Factory\{
    EastKitchen,
    WestKitchen
};
use App\Client;

function listClientOrder(Client ...$clients)
{
    foreach ($clients as $client) {
        echo $client->OrderingCoffeeAndTea().PHP_EOL;
    }
}

$eastKitchen = new EastKitchen();
$westKitchen = new WestKitchen();

$c1 = new Client($eastKitchen);
$c2 = new Client($westKitchen);
$c3 = new Client($westKitchen);
$c4 = new Client($eastKitchen);
$c5 = new Client($westKitchen);

listClientOrder($c1, $c2, $c3, $c4, $c5);