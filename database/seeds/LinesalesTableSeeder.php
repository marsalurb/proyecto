<?php

use Illuminate\Database\Seeder;

class LinesalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (App\Linesale::class,100)->create();
    }
}
