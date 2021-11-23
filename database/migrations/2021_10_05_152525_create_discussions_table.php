<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('forum_id');
            $table->string('Forum_Category_Name');
            $table->string('Discussion_Image')->nullable();
            $table->string('Discussion_Video')->nullable();
            $table->string('Author_Name');
            $table->string('Author_ID');
            $table->string('Author_Image_Name');
            $table->string('Topic');
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
        Schema::dropIfExists('discussions');
    }
}
