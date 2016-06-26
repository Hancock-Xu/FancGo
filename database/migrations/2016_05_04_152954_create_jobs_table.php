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
            $table->text('description');
            $table->text('desired_skill_experience');

            $table->enum('education_require', ['Any education','Degree and above', 'Master degree and above', 'Senior technical titles and Dr.'])->index();
            $table->enum('years_work_experience', ['Any work experience','Internship Experience','1','2','3','More than 5 years'])->index();
            $table->string('salary_lower_limit')->index();
            $table->string('salary_upper_limit')->index();
            $table->text('compensation_benefits')->nullable();
            $table->text('other_welfare')->nullable();
            $table->enum('job_status_type',['Full-time', 'Part-time', 'Internship'])->index();
            //TODO:需要修改create job blade文件中的industry列表,如何选择industry?用enum还是直接存储string?
            $table->string('industry',50)->index();

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
