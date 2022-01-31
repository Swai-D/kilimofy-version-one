<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //first Post
     \App\Models\Post::create([
         'User_id' => 1,
         'Caption' => 'We believe people with passion can change the narrative of agriculture in Tanzania,That\'s what Kilimofy represent',
         'name' => 'Kilimofy Tanzania',
         'username' => 'Kilimofy Tz',
         'User_Image_Profile' => 'default.jpg',
         'Photo' => '1638130100.jpg',
         'Video' => NULL,
         'Tag1' => NULL,
         'Tag2' => NULL,
         'Tag3' => NULL,
         'Likes' => 0,
         'Comments' => 0,
         'created_at' => '2021-09-27 08:30:18',
         'updated_at' => '2021-10-12 02:24:30',
     ]);


    }
}
