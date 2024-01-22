<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('User_id');
            $table->LongText('Caption');
            $table->string('name');
            $table->string('username');
            $table->string('User_Image_Profile');
            $table->string('Photo')->nullable();
            $table->string('Video')->nullable();
            $table->string('Make_It_Featured')->nullable();
            $table->string('Report_Post')->nullable();
            $table->string('Report_Author')->nullable();
            $table->integer('Likes')->default(0);
            $table->integer('Comments')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
