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
            'usertype' => 'normal_user',
            'description' => 'Hello, We are an agricultural platform that brings technology to the finger-tips of farmers, so that they can fight against Big Brothers in agriculture Business  ',
            'user_phone_number' => '+255767265781',
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
            'youtube' => 'NOT SET',
            'password' => '$2y$10$n/FcIAGFDIgfEeszGfMcZOLQlC5z3dnYx5cu5K2QhumJyL/JTLRuO',
            'remember_token' => NULL,
            'created_at' => '2021-09-26 15:58:06',
            'updated_at' => '2021-09-26 15:58:33',
        ]);



        \App\Models\User::create([
          'name' => 'Supper Admin',
          'username' => 'kilimofy_supper_admin',
          'usertype' => 'supper_admin',
          'description' => 'Hello, We are an agricultural platform that brings technology to the finger-tips of farmers, so that they can fight against Big Brothers in agriculture Business  ',
          'user_phone_number' => '+255767265782',
          'isVerified' => 1,
          'user_ocupation' => 'Mkulima',
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
        'name' => 'Kelvin Matem',
        'username' => 'Matem',
        'usertype' => 'normal_user',
        'description' => 'Hello, Mimi ni fundi wa mashine mbali mbali za kilimo ',
        'user_phone_number' => '+255767265772',
        'isVerified' => 1,
        'user_ocupation' => 'Fundi',
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
      'name' => 'Juve Mushi',
      'username' => 'Juve Mushi',
      'usertype' => 'normal_user',
      'description' => 'Hello, Mimi ni fundi wa mashine mbali mbali za kilimo ',
      'user_phone_number' => '+255767265680',
      'isVerified' => 1,
      'user_ocupation' => 'Fundi',
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
    'name' => 'Stanley Mahenge',
    'username' => 'Mahenge',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Mtaalam wa  kilimo ',
    'user_phone_number' => '+255754065234',
    'isVerified' => 1,
    'user_ocupation' => 'Mtaalam',
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
    'name' => 'Davy Swai',
    'username' => 'davyswai',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Mtaalam  kilimo ',
    'user_phone_number' => '+255754068934',
    'isVerified' => 1,
    'user_ocupation' => 'Mtaalam',
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
    'name' => 'Calvin Every',
    'username' => 'calvin calvin',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Muuzaji wa Mashine za kilimo ',
    'user_phone_number' => '+255754064946',
    'isVerified' => 1,
    'user_ocupation' => 'Mashine_Za_Kilimo',
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
  'name' => 'Ibra Kisua',
  'username' => 'Kisua',
  'usertype' => 'normal_user',
  'description' => 'Hello, Mimi ni Muuzaji wa Mashine za  kilimo ',
  'user_phone_number' => '+2557540656354',
  'isVerified' => 1,
  'user_ocupation' => 'Mashine_Za_Kilimo',
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
  'name' => 'Lina Mao',
  'username' => 'Lina',
  'usertype' => 'normal_user',
  'description' => 'Hello, Mimi ni Bwana Shamba ',
  'user_phone_number' => '+2557540658347',
  'isVerified' => 1,
  'user_ocupation' => 'Bwana_Shamba',
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
  'name' => 'Zunda Mbwana',
  'username' => 'Zunda Kamanda',
  'usertype' => 'normal_user',
  'description' => 'Hello, Mimi ni Bwana Shamba ',
  'user_phone_number' => '+2557540650731',
  'isVerified' => 1,
  'user_ocupation' => 'Bwana_Shamba',
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
  'name' => 'Jacline Swai',
  'username' => 'Jacline',
  'usertype' => 'normal_user',
  'description' => 'Hello, Mimi ni Fundi',
  'user_phone_number' => '+2557540834189',
  'isVerified' => 1,
  'user_ocupation' => 'Fundi',
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
    'name' => 'Jaylne Hamis',
    'username' => 'Jaylne Hamis',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Muuzaji wa Pembejeo za  kilimo ',
    'user_phone_number' => '+2557540652895',
    'isVerified' => 1,
    'user_ocupation' => 'Muuza_Pembejeo',
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
    'name' => 'Betrice Deo',
    'username' => 'B_Deo',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Muuzaji wa Pembejeo za  kilimo ',
    'user_phone_number' => '+2557540656930',
    'isVerified' => 1,
    'user_ocupation' => 'Muuza_Pembejeo',
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
    'name' => 'Kelvin Alfred',
    'username' => 'k_afred',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Muuzaji wa Mashine za  kilimo ',
    'user_phone_number' => '+2557540034189',
    'isVerified' => 1,
    'user_ocupation' => 'Muuza_Pembejeo',
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
    'name' => 'Ali Kagoma',
    'username' => 'Kagoma_Ali',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Dereva ',
    'user_phone_number' => '+2557540668389',
    'isVerified' => 1,
    'user_ocupation' => 'Dereva',
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
    'name' => 'Raymon Mshana',
    'username' => 'Mshana_Raymond',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Dereva ',
    'user_phone_number' => '+2557540657823',
    'isVerified' => 1,
    'user_ocupation' => 'Dereva',
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
    'name' => 'Vanesa Kioko',
    'username' => 'vanesa_kioko',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Dereva ',
    'user_phone_number' => '+25575406231178',
    'isVerified' => 1,
    'user_ocupation' => 'Bwana_Shamba',
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
    'name' => 'Mabala Kibwana',
    'username' => 'mabala',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Kibarua ',
    'user_phone_number' => '+2557540780144',
    'isVerified' => 1,
    'user_ocupation' => 'Kibarua',
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
    'name' => 'Nguta Masanja',
    'username' => 'Nguta Nguta',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Kibarua ',
    'user_phone_number' => '+2557540666622',
    'isVerified' => 1,
    'user_ocupation' => 'Kibarua',
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
    'name' => 'Mbwiko Mbwiko',
    'username' => 'Mbwiko',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Kibarua ',
    'user_phone_number' => '+2557540623189',
    'isVerified' => 1,
    'user_ocupation' => 'Kibarua',
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
    'name' => 'Masanja KabuKo',
    'username' => 'KabuKo',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Kibarua ',
    'user_phone_number' => '+2557540802372',
    'isVerified' => 1,
    'user_ocupation' => 'Kibarua',
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
    'name' => 'Peter Tom',
    'username' => 'Tom_Peter',
    'usertype' => 'normal_user',
    'description' => 'Hello, Mimi ni Kibarua ',
    'user_phone_number' => '+2557540667356',
    'isVerified' => 1,
    'user_ocupation' => 'Kibarua',
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


    }
}
