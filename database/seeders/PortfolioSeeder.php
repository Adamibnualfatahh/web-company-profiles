<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolios = [
        [
            'image' =>'20211220042937.png',
            'name' =>'Pembuatan Logo PWA',
            'title' => 'Logo Design',
            'created_at' => '2021-12-20 02:39:02'
        ],
        [
            'image' =>'20220105065918.jpg',
            'name' =>'Arcitects Layout Design',
            'title' => 'Pembuatan Design Rumah Mewah Di Daerah Jakarta',
            'created_at' => '2022-01-05 06:59:18'
        ],
         [
            'image' =>'20220105070101.jpg',
            'name' =>'Motorcycle Concepts Design',
            'title' => 'Pembuatan Desain Untuk Konsep Motor Masadepan',
            'created_at' => '2022-01-05 07:01:01'
        ],
        [
            'image' =>'20220105070232.jpg',
            'name' =>'Homes and Gardens Landscape Layout Design',
            'title' => 'Homes and Gardens Landscape Layout Design',
            'created_at' => '2022-01-05 07:01:01'
        ],
        ];

        DB::table('portfolios')->insert($portfolios);
    }
}
