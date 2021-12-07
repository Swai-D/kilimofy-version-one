<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //first Post
     \App\Models\Group::create([
         'Group_Name' => 'Kilimofy Funs Page',
         'Tagline' => 'All agriculture and technology Enthusiast your all welcome',
         'Description' => 'Here we can talk all about how and why technology can impact agriculture',
         'Members' => 0,
         'Post' => 0,
         'Vistors' => 0,
         'Group_Image' => 'group.jpg',
         'Status' => 'Public',
         'Creator_Name' => 'Kilimofy Tz',
         'Creator_Id' => 1,
         'Creator_Image_Path' => '1638127216.jpg',
         'created_at' => '2021-09-27 08:30:18',
         'updated_at' => '2021-10-12 02:24:30',
     ]);

    }
}
