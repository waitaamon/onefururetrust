<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users = [
			[
				'name' => 'Amon Waita',
				'email' => 'waitaamon@yahoo.com',
				'password' => bcrypt('password')
			],
			[
				'name' => 'Administrator',
				'email' => 'admin@onefuturetrust.org',
				'password' => bcrypt('password$$')
			]
		];

		foreach ($users as $user) {
			$usr = new App\Domain\Users\User();
			$usr->name = $user['name'];
			$usr->email = $user['email'];
			$usr->password = $user['password'];
			$usr->save();
		}
    }
}
