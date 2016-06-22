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
            

            $table->string('email',50)->unique()->index();
            $table->string('password',60);
            $table->string('remember_token',62)->default('default');/**/

            $table->string('passportNumber',9)->nullable()->default(null);
            $table->string('phoneNumber',13)->nullable()->default(null);

            $table->string('openid')->nullable()->default(null);
            $table->string('name', 25)->nullable()->default(null);
            $table->enum('gender',[1, 2, 0])->nullable()->default(null);
            $table->string('city',50)->nullable()->default(null);
            $table->string('country',2)->nullable()->default(null);
            $table->string('headimgurl')->nullable()->default(null);
            $table->string('province',50)->nullable()->default(null);
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
