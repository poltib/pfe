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
		$this->call('NewsTableSeeder');
		$this->call('TrainingsTableSeeder');
		$this->call('RacesTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('MessagesTableSeeder');
		$this->call('CategoriesTableSeeder');
	}

}