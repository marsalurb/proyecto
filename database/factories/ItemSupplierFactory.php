<?php

use Faker\Generator as Faker;

$factory->define(App\ItemSupplier::class, function (Faker $faker) use ($factory){
    return [
        'supplier_id'=>$factory->create(App\Supplier::class)->id,
        'item_id'=>$factory->create(App\Item::class)->id

    ];
});

