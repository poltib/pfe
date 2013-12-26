<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('roles')->truncate();

		DB::table('roles')->delete();
        Role::create(array(
            'name' => 'admin', 
            'privileges' => 'path'
            ));

        Role::create(array(
            'name' => 'mod', 
            'privileges' => 'path'
            ));

        Role::create(array(
            'name' => 'membre', 
            'privileges' => 'path'
            ));


		// Uncomment the below to run the seeder
		// DB::table('roles')->insert($roles);
	}

}
