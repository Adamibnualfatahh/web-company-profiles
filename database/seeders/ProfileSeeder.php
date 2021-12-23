<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('misis')->insert([
            'Image' => '20211219021353.png',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe rerum distinctio ipsa veniam impedit',
            'visi' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe rerum distinctio ipsa veniam impedit',
            'misi' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe rerum distinctio ipsa veniam impedit'
        ]);
    }
}
