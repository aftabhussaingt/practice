<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stringg = date("Y-m-d H:i:s",rand(1262055681,1262055681));
        DB::table('sales')->insert([
            'contractor' => str_random(10),
            'amount' => rand(10,20),
            'debt' => rand(10,20),
            'company' => str_random(10),
            'date'=>$stringg,
            'fixed_date'=>$stringg,
            'created_at'=>$stringg,
            'updated_at'=>$stringg,

        ]);
    }
}
