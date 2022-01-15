<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $video = [
        [
            'video' =>'20220115024841.mp4',
            'name' =>'Raditya Dika',
            'title' => 'Ujung Selotip',
        ],
        [
            'video' =>'20220115025029.mp4',
            'name' =>'Raditya Dika',
            'title' => 'Makan',
        ]
        
        ];

        DB::table('videos')->insert($video);
    }
}
