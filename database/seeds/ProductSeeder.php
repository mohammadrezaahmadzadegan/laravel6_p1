<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i=0;$i<50;$i++){
        //     DB::table('Products')->insert([
        //         'name' => Str::random(10),
        //         'content' => Str::random(100),
        //         'created_at' => date('Y-m-d')
        //     ]);
        // }

    }
}
