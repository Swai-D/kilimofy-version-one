<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //1
    \App\Models\Forum::create([
        'Category' => 'Kilimo',
        'Category_Description' => 'Pata Ushauri, Mawazo na Michango Kuhusu kilimo',
        'Category_Image' => '1633429307.png',
        'Topics' => 3,
        'Posts' => 3,
        'created_at' => '2021-09-27 08:30:18',
        'updated_at' => '2021-10-12 02:24:30',
    ]);

    //2
    \App\Models\Forum::create([
        'Category' => 'Usafirishaji',
        'Category_Description' => 'Everything about the transportation of agriculture products',
        'Category_Image' => '1633814279.png',
        'Topics' => 2,
        'Posts' => 2,
        'created_at' => '2021-09-27 08:30:18',
        'updated_at' => '2021-10-12 02:24:30',
    ]);

    //3
    \App\Models\Forum::create([
        'Category' => 'Ufugaji',
        'Category_Description' => 'Jifunze aina mbalimbali za usafirishaji wa mazao yako toka shamba',
        'Category_Image' => '1635001944.png',
        'Topics' => 0,
        'Posts' => 0,
        'created_at' => '2021-09-27 08:30:18',
        'updated_at' => '2021-10-12 02:24:30',
    ]);


    }
}
