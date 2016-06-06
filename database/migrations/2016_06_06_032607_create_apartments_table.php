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
            
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('company_id')->unsigned()->nullable();
            
            $table->string('name',50);
            $table->string('description',500);
            $table->enum('rent_type', ['shared_apartment','entire_rent']);
            $table->integer('bedrooms')->unsigned();
            $table->integer('bathrooms')->unsigned();
            $table->integer('living_rooms')->unsigned();
            $table->integer('size')->unsigned();
            $table->string('location/district',20);
            $table->string('nearest_mtr_station',10);
            $table->enum('condition',['no smoking','no pets','no kids'])->nullable();
            $table->integer('price')->unsigned();
            $table->timestamp('published_at')->nullable();
        });
        
        Schema::table('apartments', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');
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
