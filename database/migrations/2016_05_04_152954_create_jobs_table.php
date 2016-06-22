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

            $table->string('job_title',50);
            $table->text('description');
            $table->text('desired_skill_experience');
            $table->text('compensation_benefits');
            $table->enum('eduction_require', ['Any education','Degree and above', 'Master degree and above', 'Senior technical titles and Dr.']);
            $table->enum('years_work_experience', ['Any work experience','Internship Experience','1','2','3','More than 5 years']);
            $table->string('salary_lower_limit')->index();
            $table->string('salary_upper_limit')->index();
            $table->text('other_welfare')->nullable();
            $table->enum('job_status_type',['Full-time', 'Part-time', 'Internship'])->nullable()->default(null)->index();

            $table->enum('industry', [
                'Sales/Marketing'=>[
                    'Sales/Retail',
                    'Marketing',
                    'Advertisement',
                    'PR',
                    'Customer Service'],
                'Education/Training'=>[
                    'Teaching',
                    'Other Teaching',
                    'Translation/Proofreading'
                    ],
                'Creative'=>[
                    'Graphic Design', 
                    'Photographer', 
                    'Artwork Designer'
                    ],
                'Trade/Logistic'=>[
                    'Sourcing/Purchasing',
                    'International Trade',
                    'Logistic'
                    ],
                'Manufacture'=>[
                    'Architecture',
                    'Manufacturing/Production',
                    'Engineer'
                    ],
                'Finance/Consultancy'=>[
                    'Finance',
                    'Accounting',
                    'Banking',
                    'Consultancy',
                    'Legal'
                    ],
                'Admin'=>[
                    'Professional Manager',
                    'Secretarial/Office manager',
                    'Human Resource'
                    ],
                'Entertainment/Catering'=>[
                    'Acting/Model/Voice',
                    'Bar/Club/Restaurant Staff',
                    'Hotel/tourism'
                    ],
                'Healthcare'=>[
                    'Physician Job',
                    'Medical assistant job',
                    'Biomedical Engineer Job'
                    ],
                'Others'
                ])->index();

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
