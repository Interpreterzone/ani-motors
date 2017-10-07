<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('user_name');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('phone_number');
			$table->string('email');
			$table->string('password');
			$table->string('user_engaged_from');
			$table->string('referral_code');
			$table->string('confirmed');
			$table->string('confirmation_code');
			$table->string('remember_token');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('users');
	}
}