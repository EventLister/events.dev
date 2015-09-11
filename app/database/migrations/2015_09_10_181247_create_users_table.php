<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{

			$table->increments('id');
		 		$table->string('password', 255);
		 		$table->string('email', 255)->unique();
		 		$table->string('first_name', 255);
		 		$table->string('last_name', 255);
		 		$table->string('username', 255);
		 		$table->string('address', 255);
		 		$table->string('city', 255);
		 		$table->string('state', 255);
		 		$table->string('zip_code', 255);
		 		$table->string('phone', 255);
		 		$table->string('time_zone')->nullable();


			$table->rememberToken();
			$table->timestamps();
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
