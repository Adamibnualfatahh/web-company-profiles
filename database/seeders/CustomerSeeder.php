<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $customer = [
        [
            'image' =>'20211223013633.png',
            'name' =>'name2',
       ],
       [
            'image' =>'20220103081721.png',
            'name' =>'name3',
       ],
       [
            'image' =>'20220103081735.png',
            'name' =>'name4',
       ],
       [
            'image' =>'20220103081748.png',
            'name' =>'name5',
       ],
       [
            'image' =>'20220103081836.png',
            'name' =>'name6',
       ],

        ];

        DB::table('customers')->insert($customer);
    }
}
 