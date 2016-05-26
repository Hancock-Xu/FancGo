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
            /*
             * 公司营业执照名字
             */
            $table->string('business_license_name',50);
            $table->string('resume_email',50);
            $table->string('logo_url')->nullable()->default(null);
            $table->string('website')->nullable()->default(null);
            /**
             * 公司营业执照或者其他证明文件
             */
            $table->string('certificate_url')->nullable()->default(nullValue());

            $table->text('description');
            $table->string('scale');
            $table->string('location');
            $table->string('industry', 50);
            $table->string('email', 50);
            $table->string('phone_number',11);
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
