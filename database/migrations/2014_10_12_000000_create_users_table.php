<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('username')->unique();
            $table->string('usertype')->default('normal_user');
            $table->longText('description')->nullable();
            $table->string('user_phone_number')->unique();
            $table->boolean('isVerified')->default(false);
            $table->string('user_ocupation')->default('Mkulima');
            $table->string('user_location');
            $table->string('avatar')->default('default.jpg');
            $table->integer('age')->nullable();
            $table->string('email')->default('NOT SET');
            $table->date('birthday')->nullable();
            $table->string('status')->default('NOT SET');
            $table->string('web')->default('NOT SET');
            $table->string('facebook')->default('NOT SET');
            $table->string('instagram')->default('NOT SET');
            $table->string('twitter')->default('NOT SET');
            $table->string('youtube')->default('NOT SET');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
