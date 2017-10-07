<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSignupDataTable extends Migration {

	public function up()
	{
		Schema::create('signupData', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('firstName');
			$table->string('lastName');
			$table->string('phoneNum');
			$table->string('email');
			$table->string('password');
			$table->string('userEngageFrom');
			$table->string('reffralCode');
		});
	}

	public function down()
	{
		Schema::drop('signupData');
	}
}