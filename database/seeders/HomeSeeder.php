<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('homes')->insert([
            'title' => 'Adam Ibnu Alfatah',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe rerum distinctio ipsa veniam impedit',
            'image' =>'20211219021012.png',
        ]);
    }
}
