<?php

use Faker\Generator as Faker;

$factory->define(App\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array ('optical', 'assistant', 'admin'))
    ];
});
