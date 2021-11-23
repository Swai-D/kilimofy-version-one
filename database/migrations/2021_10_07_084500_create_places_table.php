<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('Region');
          $table->string('District');
          $table->string('SoilPh');
          $table->string('SoilType');
          $table->string('PriorityCashCrops_1')->nullable();
          $table->string('PriorityCashCrops_2')->nullable();
          $table->string('PriorityCashCrops_3')->nullable();
          $table->string('PriorityFoodCrops_1')->nullable();
          $table->string('PriorityFoodCrops_2')->nullable();
          $table->string('PriorityFoodCrops_3')->nullable();
          $table->string('LessPriorityCashCrops_1')->nullable();
          $table->string('LessPriorityCashCrops_2')->nullable();
          $table->string('LessPriorityCashCrops_3')->nullable();
          $table->string('LessPriorityFoodCrops_1')->nullable();
          $table->string('LessPriorityFoodCrops_2')->nullable();
          $table->string('LessPriorityFoodCrops_3')->nullable();
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
        Schema::dropIfExists('places');
    }
}
