<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            UserSeeder::class,
            BlogSeeder::class,
            GallerySeeder::class,
            HomeSeeder::class,
            PortfolioSeeder::class,
            ProfileSeeder::class,
            CardSeeder::class,
            AboutSeeder::class,
            CustomerSeeder::class,
            VideoSeeder::class,
        ]);
    }
}
