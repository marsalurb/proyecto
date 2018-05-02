<?php

use Faker\Generator as Faker;

$factory->define(App\Purchaser::class, function (Faker $faker) use ($factory){
    return [
        'sex' => $faker->randomElement(['male', 'female']),
        'birthdate' => $faker-> date($format = 'Y-m-d', $max = 'now'),
        'user_id'=>$factory->create(App\User::class)->id

    ];
});
