<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name');
            $table->string('item_image');
            $table->string('item_category');
            $table->string('item_price');
            $table->string('item_description');
            $table->string('feedback')->nullable();
            $table->string('status')->default('Accepted');
            $table->string('seller_id');
            $table->string('seller_name');
            $table->string('seller_image_location');
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
        Schema::dropIfExists('items');
    }
}
