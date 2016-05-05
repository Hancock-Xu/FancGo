<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name',50);
            $table->text('description')->nullable()->default(null);
            $table->string('scale')->nullable()->default(null);
            $table->string('location')->nullable()->default(null);
            $table->string('industry', 50)->nullable()->default(null);
            $table->string('contract', 50);
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
