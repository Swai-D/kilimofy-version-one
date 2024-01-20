<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paticipants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('discussion_id');
            $table->string('Post_Content');
            $table->string('Author_Name');
            $table->string('Author_ID');
            $table->string('Author_Image_Name');
            $table->string('Post_Image')->nullable();
            $table->string('Post_Video')->nullable();
            $table->string('File')->nullable();
            $table->string('Report')->nullable();
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
        Schema::dropIfExists('paticipants');
    }
}
