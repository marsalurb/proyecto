<?php

use Faker\Generator as Faker;

$factory->define(App\Employer::class, function (Faker $faker) use ($factory){
    return [
        'salary' => $faker->numberBetween($min = 0, $max = 3000),
        'user_id'=>$factory->create(App\User::class)->id,
        'role_id'=>$factory->create(App\Role::class)->id,


    ];
});
