<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];

        $user1 = [
            'name' => 'admin',
            'email' => 'palo.galcik@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$6tRY2JvtHG6ajWWfiSUapeVeqSF5bpHJY56YJnn9yPWV8Q3xAJV1K',
            'is_admin' => true,
            'profile_picture' => '2022-12-29-17_16_58_mirek.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $user2 = [
            'name' => 'mirek',
            'email' => 'jako.galcik@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$6tRY2JvtHG6ajWWfiSUapeVeqSF5bpHJY56YJnn9yPWV8Q3xAJV1K',
            'is_admin' => false,
            'profile_picture' => '2022-12-29-17_18_59_user3-267-940.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $users[] = $user1;
        $users[] = $user2;

        DB::table('users')->delete();
        DB::table('users')->insert($users);
    }
}
