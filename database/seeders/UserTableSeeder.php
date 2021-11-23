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
        'name' => 'Davy Swai',
        'user_phone_number' => '+255767265780',
        'isVerified' => 1,
        'user_ocupation' => 'Mkulima',
        'user_location' => 'Mbeya, Kyela',
        'avatar' => 'default.jpg',
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

    \App\Models\User::create([
        'name' => 'Kelvin Swai',
        'user_phone_number' => '+255755415312',
        'isVerified' => 1,
        'user_ocupation' => 'Muuzaji_Wa_pembejeo_Na_Viwatilifu',
        'user_location' => 'Arusha, Arusha Mjini',
        'avatar' => 'default.jpg',
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


    \App\Models\User::create([
        'name' => 'Athuman',
        'user_phone_number' => '+255763778154',
        'isVerified' => 1,
        'user_ocupation' => 'Bwana_Shamba',
        'user_location' => 'Mbeya, Kyela',
        'avatar' => 'default.jpg',
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

    \App\Models\User::create([
        'name' => 'Anuari',
        'user_phone_number' => '+255629954037',
        'isVerified' => 1,
        'user_ocupation' => 'Fundi_Na_Mashine_Za_Kilimo',
        'user_location' => 'Arusha, Arusha Mjini',
        'avatar' => 'default.jpg',
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




    \App\Models\User::create([
      'name' => 'Ibrahim Kisua',
      'user_phone_number' => '+255717098946',
      'isVerified' => 1,
      'user_ocupation' => 'Watoaji_Huduma_Za_Usafiri',
      'user_location' => 'Dar-es-salaam , Ilala',
      'avatar' => 'default.jpg',
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

  \App\Models\User::create([
      'name' => 'Mbwana Adam',
      'user_phone_number' => '+255653181802',
      'isVerified' => 1,
      'user_ocupation' => 'Muuzaji_Wa_pembejeo_Na_Viwatilifu',
      'user_location' => 'Tabora, Nzega',
      'avatar' => 'default.jpg',
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


  \App\Models\User::create([
      'name' => 'Kelvin Matemu',
      'user_phone_number' => '+255783320434',
      'isVerified' => 1,
      'user_ocupation' => 'Mkulima',
      'user_location' => 'Kilimanjaro, Siha',
      'avatar' => 'default.jpg',
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

  \App\Models\User::create([
      'name' => 'Juve Cheresi',
      'user_phone_number' => '+255757334887',
      'isVerified' => 1,
      'user_ocupation' => 'Fundi_Na_Mashine_Za_Kilimo',
      'user_location' => 'Iringa, Mafinga',
      'avatar' => 'default.jpg',
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
