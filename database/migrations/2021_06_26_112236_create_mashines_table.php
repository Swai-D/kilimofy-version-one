<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMashinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mashines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Mashine_Name');
            $table->string('Mashine_Work');
            $table->string('Mashine_Image');
            $table->string('Mashine_Price');
            $table->string('Mashine_Description');
            $table->string('Seller_Name');
            $table->string('Seller_Id');
            $table->string('Seller_Image_Path');
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
        Schema::dropIfExists('mashines');
    }
}
