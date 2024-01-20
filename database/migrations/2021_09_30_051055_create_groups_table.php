<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Group_Name');
            $table->string('Tagline')->nullable();
            $table->string('Description');
            $table->string('Members')->default(0);
            $table->string('Post')->default(0);
            $table->string('Vistors')->default(0);
            $table->string('Group_Image')->default('group.jpg');
            $table->string('Status')->default('Public');
            $table->string('Creator_Name');
            $table->string('Creator_Id');
            $table->string('Creator_Image_Path')->nullable();
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
        Schema::dropIfExists('groups');
    }
}
