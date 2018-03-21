<?php

use Faker\Generator as Faker;

$factory->define(App\Linesale::class, function (Faker $faker) use ($factory) {
    return [
        'amount' => $faker->numberBetween($min=0, $max=20),
        'sale_id'=>$factory->create(App\Sale::class)->id,
        'item_id'=>$factory->create(App\Item::class)->id,

    ];
});
