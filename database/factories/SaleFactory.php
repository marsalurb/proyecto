<?php

use Faker\Generator as Faker;

$factory->define(App\Sale::class, function (Faker $faker) use ($factory) {
    return [
        'employer_id'=>$factory->create(App\Employer::class)->id,
        'purchaser_id'=>$factory->create(App\Purchaser::class)->id
    ];
});
