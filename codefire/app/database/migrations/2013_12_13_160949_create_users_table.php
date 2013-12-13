<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Create the users table.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('username', 24);
			$table->string('email', 32);
			$table->string('password', 64);
			$table->string('activation_code', 16);
			$table->boolean('activated')->default(FALSE);
			$table->timestamps();
		});
	}

	/**
	 * Drop the users table.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}