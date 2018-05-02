<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'price' => $faker->numberBetween($min = 0, $max = 500),
        'model' =>str_random(6),
        'brand' =>str_random(10),
        'guarantee' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+ 2 years', $timezone = null),
        'stock' => $faker->numberBetween($min = 0, $max = 50)

    ];
});
