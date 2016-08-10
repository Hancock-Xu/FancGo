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

            $table->integer('company_id')->unsigned()->index();
            $table->string('resume_email',50);

            $table->string('job_title',50);
            $table->text('job_description');
            $table->text('desired_skill_experience');

            $table->enum('education_degree', ['Any education','Associate', 'Bachelor', 'Master', 'Dr.'])->index();
            $table->enum('position_experience', ['Intership','Entry Level','Associate','Mid-Senior Level','Director','Executive'])->index();
            $table->integer('min_salary')->index();
            $table->integer('max_salary')->index();
            $table->text('position_benefit')->nullable();
            $table->text('extra_welfare')->nullable();
            $table->enum('job_status_type',['Full-time', 'Part-time', 'Internship'])->index();
            $table->string('job_industry',50)->index();
            $table->string('work_city',30)->index();

            $table->string('position_points')->nullable();

            $table->timestamp('published_at')->nullable()->index();
        });
        
        Schema::table('jobs', function (Blueprint $table){
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
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
