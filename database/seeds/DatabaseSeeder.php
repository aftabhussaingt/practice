<?php

use Illuminate\Database\Seeder;
//use SalesTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,10) as $a)
         $this->call(SalesTableSeeder::class);

    }
}
