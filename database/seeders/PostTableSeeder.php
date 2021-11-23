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
         'Caption' => 'If people suspect their Cattle Bewitched, if they be great Cattle, make the twelfth house their ascendant, and the eleventh their twelfth house, and vary your Rules with Judgment.',
         'name' => 'Davy Swai',
         'User_Image_Profile' => '1634957670.jpg',
         'Photo' => NULL,
         'Video' => '1632742218.mp4',
         'Tag1' => NULL,
         'Tag2' => NULL,
         'Tag3' => NULL,
         'Likes' => 0,
         'Comments' => 0,
         'created_at' => '2021-09-27 08:30:18',
         'updated_at' => '2021-10-12 02:24:30',
     ]);

     //second Post
     \App\Models\Post::create([
         'User_id' => 1,
         'Caption' => 'I wanted to be a farmer\'s wife. I thought it would be quite fun to wake up of a morning, collect eggs and have sheep and pigs as pets. I know now that it would also involve having to sleep with the farmer, but at the time I wasn\'t thinking about the sexual implications - I was 11.\r\nRead more at https://www.brainyquote.com/topics/farmer-quotes',
         'name' => 'Davy Swai',
         'User_Image_Profile' => '1634957670.jpg',
         'Photo' => '1632742563.jpg',
         'Video' => NULL,
         'Tag1' => NULL,
         'Tag2' => NULL,
         'Tag3' => NULL,
         'Likes' => 0,
         'Comments' => 0,
         'created_at' => '2021-09-27 08:36:04',
         'updated_at' => '2021-10-12 02:24:30',
     ]);

    //Third Post
     \App\Models\Post::create([
         'User_id' => 1,
         'Caption' => 'I briefly did therapy, but after a while, I realised it is just like a farmer complaining about the weather. You can\'t fix the weather - you just have to get on with it. \r\n\r\nDouglas Adams',
         'name' => 'Davy Swai',
         'User_Image_Profile' => '1634957670.jpg',
         'Photo' => NULL,
         'Video' => NULL,
         'Tag1' => NULL,
         'Tag2' => NULL,
         'Tag3' => NULL,
         'Likes' => 0,
         'Comments' => 0,
         'created_at' => '2021-09-27 08:36:05',
         'updated_at' => '2021-10-12 02:24:30',
     ]);

     //fourth Post
      \App\Models\Post::create([
          'User_id' => 1,
          'Caption' => 'We want capitalism and market forces to be the slave of democracy rather than the opposite. \r\n\r\nThomas Piketty',
          'name' => 'Davy Swai',
          'User_Image_Profile' => '1634957670.jpg',
          'Photo' => '1632744531.jpg',
          'Video' => NULL,
          'Tag1' => NULL,
          'Tag2' => NULL,
          'Tag3' => NULL,
          'Likes' => 0,
          'Comments' => 0,
          'created_at' => '2021-09-27 08:36:06',
          'updated_at' => '2021-10-12 02:24:30',
      ]);

      //fifth Post
       \App\Models\Post::create([
           'User_id' => 1,
           'Caption' => 'Agriculture is not crop production as popular belief holds - it\'s the production of food and fiber from the world\'s land and waters. Without agriculture it is not possible to have a city, stock market, banks, university, church or army. Agriculture is the foundation of civilization and any stable economy.\r\nRead more at https://www.brainyquote.com/topics/market-quotes',
           'name' => 'Davy Swai',
           'User_Image_Profile' => '1634957670.jpg',
           'Photo' => '1632744822.png',
           'Video' => NULL,
           'Tag1' => NULL,
           'Tag2' => NULL,
           'Tag3' => NULL,
           'Likes' => 0,
           'Comments' => 0,
           'created_at' => '2021-09-27 08:36:07',
           'updated_at' => '2021-10-12 02:24:30',
       ]);

       

    }
}
