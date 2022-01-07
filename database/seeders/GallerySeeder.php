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
$galleries = [
        [
            'image' =>'20211220023544.jpg',
            'name' =>'Saya Sendiri',
            'title' => 'Foto ketika acara pembagian hasil nilai',
        ],
        [
            'image' =>'20220105065511.jpg',
            'name' =>'Animation Design',
            'title' => 'Character Animation Design',
        ],
        ];

        DB::table('galleries')->insert($galleries);
	
    }
}
