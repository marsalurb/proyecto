<?php

use Illuminate\Database\Seeder;

class PurchasersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (App\Purchaser::class, 20)->create();
    }
}
