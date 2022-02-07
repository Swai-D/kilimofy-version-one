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
            $table->string('user_id');
            $table->string('event_category')->default('Small Events');
            $table->string('event_name');
            $table->string('event_location');
            $table->datetime('event_date');
            $table->string('event_start');
            $table->string('event_start_time_annotation');
            $table->string('event_end');
            $table->string('event_end_time_annotation');
            $table->string('event_description');
            $table->string('event_cover_photo')->default('event_cover_photo.jpg');
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
