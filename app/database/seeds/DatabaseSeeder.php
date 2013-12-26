<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('StatusTableSeeder');
		$this->call('EventTypesTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('MessagesTableSeeder');
		$this->call('TeamsTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('HappeningsTableSeeder');
		$this->call('SponsorsTableSeeder');
		$this->call('HappeningUserTableSeeder');
		//$this->call('ForumsTableSeeder');
		//$this->call('ImagesTableSeeder');
		$this->call('MessageUserTableSeeder');
		//$this->call('AnnouncesTableSeeder');
		$this->call('CategoryPostTableSeeder');
		$this->call('TeamUserTableSeeder');
	}

}