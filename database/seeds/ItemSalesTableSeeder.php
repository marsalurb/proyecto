<?php

use Illuminate\Database\Seeder;

class ItemSalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (App\ItemSale::class,30)->create();
    }
}
