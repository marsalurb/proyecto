<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(UsersTableSeeder::class);
        $this->call(EmployersTableSeeder::class);
        $this->call(PurchasersTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(LinesalesTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(ItemSuppliersTableSeeder::class);
    }
}
