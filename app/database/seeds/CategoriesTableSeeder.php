<?php

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('categories')->truncate();

		DB::table('categories')->delete();
        Category::create(array(
            'name' => 'Conseils',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo'
        ));

        Category::create(array(
            'name' => 'Chaussures',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo'
        ));

        Category::create(array(
            'name' => 'Entrainements',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo'
        ));

        Category::create(array(
            'name' => 'Vêtements',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo'
        ));

        Category::create(array(
            'name' => 'Groupes',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo'
        ));

		// Uncomment the below to run the seeder
		// DB::table('categories')->insert($categories);
	}

}
