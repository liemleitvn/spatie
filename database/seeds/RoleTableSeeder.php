<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$permissions = [
			'superAdmin',
			'admin',
			'editor',
			'user',
		];


		foreach ($permissions as $permission) {
			\Spatie\Permission\Models\Role::create(['name' => $permission]);
		}
    }
}
