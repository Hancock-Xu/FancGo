<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->string('name',50);
            $table->string('description',500);
            $table->enum('rent_type', ['shared_apartment','entire_rent']);
            $table->integer('bedrooms')->unsigned();
            $table->integer('bathrooms')->unsigned();
            $table->integer('living_rooms')->unsigned();
            $table->integer('size')->unsigned();
            $table->string('location/district',20);
            $table->string('nearest_mtr_station',10);
            $table->enum('condition',['no smoking','no pets','no kids']);
            $table->integer('price')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apartments');
    }
}
