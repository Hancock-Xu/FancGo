<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\DependencyInjection\Tests\Compiler\ServiceClassMariaDb;

class CreateApartmentApartmentImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_apartment_image', function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            
            $table->integer('apartment_id')->unsigned()->index();
            $table->integer('apartment_image_id')->unsigned()->index();
        });
        
        Schema::table('apartment_apartment_image', function (Blueprint $table){
            $table->foreign('apartment_id')->references('id')->on('apartments');
            $table->foreign('apartment_image_id')->references('id')->on('apartment_images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apartment_apartment_image');
    }
}
