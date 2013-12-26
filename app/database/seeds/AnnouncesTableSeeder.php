<?php

class AnnouncesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('announces')->truncate();

		DB::table('categories')->delete();
        Category::create(array(
            'name' => 'conseils',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'from' => '1'
        ));

		// Uncomment the below to run the seeder
		// DB::table('announces')->insert($announces);
	}

}
