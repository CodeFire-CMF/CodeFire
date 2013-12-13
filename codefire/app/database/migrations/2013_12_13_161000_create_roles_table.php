<?php

use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

	/**
	 * Create the roles table.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles', function($table)
		{
			$table->increments('id');
			$table->string('name', 16);
			$table->timestamps();
		});
	}

	/**
	 * Drop the roles table
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roles');
	}

}