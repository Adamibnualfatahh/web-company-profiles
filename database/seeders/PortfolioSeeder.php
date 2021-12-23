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
       DB::table('portfolios')->insert([
            'image' =>'20211220042937.png',
            'name' =>'Pembuatan Logo PWA',
            'title' => 'Logo Design',
            'created_at' => '2021-12-20 02:39:02'
        ]);
    }
}
