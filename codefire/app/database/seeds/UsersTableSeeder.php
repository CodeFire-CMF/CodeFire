<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array(
			array(
				'username' => 'admin',
				'email' => 'admin@example.com',
				'password' => Hash::make('admin')
			)
		);

		DB::table('users')->insert($users);
	}

}
