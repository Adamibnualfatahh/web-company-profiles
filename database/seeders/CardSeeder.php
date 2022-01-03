<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
        [
            'header' =>'1',
            'image' =>'20211222162149.svg',
            'text' =>'Clean',
            'title' => 'Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.
',
        ],
        [
            'header' =>'2',
            'image' =>'20220103082526.svg',
            'text' =>'Fresh',
            'title' => 'Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.
',
        ],
        [
            'header' =>'3',
            'image' =>'20220103082637.svg',
            'text' =>'Simple',
            'title' => 'Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.
',
        ],
        ];

        DB::table('cards')->insert($cards);
    }
}
