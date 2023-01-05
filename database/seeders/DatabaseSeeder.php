<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(ReviewsSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CarouselSeeder::class);
    }
}
