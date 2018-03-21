<?php

use Faker\Generator as Faker;

$factory->define(App\Supplier::class, function (Faker $faker) use ($factory){
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'number' => $faker->phoneNumber,
        'cif' => str_random(9),
    ];
});
