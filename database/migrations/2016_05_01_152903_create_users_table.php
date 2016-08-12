<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

	        $table->string('first_name', 50);
	        $table->string('last_name', 50);
	        $table->enum('sex',[1, 2, 0])->nullable()->default(null);
	        $table->timestamp('date_of_birth')->nullable()->default(null);
	        $table->string('nationality')->nullable()->default(null);
	        $table->string('native_language')->nullable()->default(null);
	        $table->string('chinese_level')->nullable()->default(null);
	        $table->string('current_residence')->nullable()->default(null);
	        $table->string('phoneNumber',14)->nullable()->default(null);
	        $table->boolean('finish_basic_info')->default(false);
	        $table->string('passportNumber',9)->nullable()->default(null);
	        $table->string('resume_url')->nullable();

            $table->string('email',50)->unique()->index();
            $table->string('password',60);
            $table->string('remember_token',62)->default('default');/**/




            $table->string('openid')->nullable()->default(null);

            $table->string('city',50)->nullable()->default(null);
            $table->string('country',30)->nullable()->default(null);
            $table->string('headimgurl')->nullable()->default(null);
            $table->string('unionid')->nullable()->default(null);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
