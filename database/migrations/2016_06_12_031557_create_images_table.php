<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table){
            $table->timestamps();
            $table->increments('id');

            $table->integer('company_id')->unsigned()->nullable()->index();
            $table->integer('job_id')->unsigned()->nullable()->index();
            $table->integer('apartment_id')->unsigned()->nullable()->index();

            $table->string('image_path');

        });

        Schema::table('images', function (Blueprint $table){

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('apartment_id')->references('id')->on('apartments');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
