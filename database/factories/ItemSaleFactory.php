<?php

use Faker\Generator as Faker;

$factory->define(App\ItemSale::class, function (Faker $faker) use ($factory){
    return [
        'amount' => $faker->numberBetween($min = 0, $max = 50),
        'sale_id'=>$factory->create(App\Sale::class)->id,
        'item_id'=>$factory->create(App\Item::class)->id

    ];
});
