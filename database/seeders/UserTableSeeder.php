<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\User::create([
        'name' => 'Kilimofy Tanzania',
        'username' => 'Kilimofy Tz',
        'description' => 'Hello, We are an agricultural platform that brings technology to the finger-tips of farmers, so that they can fight against Big Brothers in agriculture Business  ',
        'user_phone_number' => '+255767265780',
        'isVerified' => 1,
        'user_ocupation' => 'Mkulima',
        'user_location' => 'Arusha, Arusha Mjini',
        'avatar' => '1638127216.jpg',
        'age' => NULL,
        'email' => 'NOT SET',
        'birthday' => NULL,
        'status' => 'NOT SET',
        'web' => 'NOT SET',
        'facebook' => 'NOT SET',
        'instagram' => 'NOT SET',
        'twitter' => 'NOT SET',
        'password' => '$2y$10$n/FcIAGFDIgfEeszGfMcZOLQlC5z3dnYx5cu5K2QhumJyL/JTLRuO',
        'remember_token' => NULL,
        'created_at' => '2021-09-26 15:58:06',
        'updated_at' => '2021-09-26 15:58:33',
    ]);


    }
}
