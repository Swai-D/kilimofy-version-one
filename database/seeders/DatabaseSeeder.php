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
        $this->call(UserTableSeeder::class);
        $this->call(ForumTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(PlaceTableSeeder::class);
        $this->call(GroupTableSeeder::class);
    }
}
