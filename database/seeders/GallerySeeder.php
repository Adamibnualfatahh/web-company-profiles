<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('galleries')->insert([
            'image' =>'20211220023544.jpg',
            'name' =>'Saya Sendiri',
            'title' => 'Foto ketika acara pembagian hasil nilai',
        ]);
    }
}
