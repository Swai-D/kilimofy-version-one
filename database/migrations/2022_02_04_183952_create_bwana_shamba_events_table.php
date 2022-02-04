<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBwanaShambaEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bwana_shamba_events', function (Blueprint $table) {
            $table->id();
            $table->string('event_category');
            $table->string('event_name');
            $table->string('event_location');
            $table->string('event_date');
            $table->date('event_start');
            $table->date('event_end');
            $table->string('event_description');
            $table->string('event_cover_photo')->default('event.jpg');
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
        Schema::dropIfExists('bwana_shamba_events');
    }
}
