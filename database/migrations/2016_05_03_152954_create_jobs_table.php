<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            /*
             * company外键
             */
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');

            $table->string('job_title',50);
            $table->text('responsibility');
            $table->string('eduction_require')->nullable()->default(null);
            $table->integer('years_work_experience')->nullable()->default(null);
            $table->string('salary_and_other_welfare');
            $table->string('job_status_type',50)->nullable()->default(null);
            $table->string('industry', 50)->nullable()->default(null);

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
        Schema::drop('jobs');
    }
}
