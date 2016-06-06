<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentAmenityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_amenity', function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();

            $table->integer('apartment_id')->unsigned()->index();
            $table->integer('amenity_id')->unsigned()->index();
        });
        
        Schema::table('apartment_amenity', function (Blueprint $table) {
            $table->foreign('apartment_id')->references('id')->on('apartments');
            $table->foreign('amenity_id')->references('id')->on('amenities');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apartment_amenity');
    }
}
