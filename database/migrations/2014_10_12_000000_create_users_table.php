<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('university_id')->nullable();
            $table->string('course_id')->nullable();
            $table->string('habits_id')->nullable();
            $table->string('function')->nullable();
            $table->string('telephone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->string('provider')->default('site');
            $table->string('provider_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();

            $table->rememberToken()->nullable();
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
