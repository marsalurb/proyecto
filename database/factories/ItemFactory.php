<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'price' => $faker->numberBetween($min = 0, $max = 1000),
        'model' =>str_random(15),
        'brand' =>str_random(20),
        'guarantee' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+ 2 years', $timezone = null),
        'stock' => $faker->numberBetween($min = 0, $max = 50),

    ];
});
