<?php

use Faker\Generator as Faker;

$factory->define(App\Employer::class, function (Faker $faker) use ($factory){
    return [
        'role' => $faker->randomElement(['optical','assistant']),
        'user_id'=>$factory->create(App\User::class)->id,


    ];
});
