<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable();
            $table->string('characteristics_id')->nullable();
            $table->string('number_of_bedrooms')->nullable();
            $table->string('number_of_bathrooms')->nullable();
            $table->string('number_of_residents')->nullable();
            $table->string('property_size')->nullable();
            $table->string('address')->nullable();
            $table->string('cep')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('number')->nullable();
            $table->string('gallery_id')->nullable();
            $table->string('accounts_id')->nullable();
            $table->string('university_id')->nullable();
            $table->string('course_id')->nullable();
            $table->string('requirements')->nullable();
            $table->string('owner_id')->nullable();
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
        Schema::dropIfExists('property');
    }
}
