<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'price' => $faker->numberBetween($min = 0, $max = 1000),
        'model' =>str_random(15),
        'brand' =>str_random(20),
        'guarantee' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'stock' => $faker->numberBetween($min = 0, $max = 50),

    ];
});
