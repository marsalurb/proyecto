<?php

use Illuminate\Database\Seeder;

class ItemSuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (App\ItemSupplier::class,100)->create();
    }
}
