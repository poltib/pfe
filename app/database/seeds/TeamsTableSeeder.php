<?php

class TeamsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('teams')->delete();
        Team::create(array(
            'name' => 'Mons',
            'thumb' => 'uploads/teams/thumbDefault.jpg',
            'image' => 'uploads/teams/default.jpg',
            'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));

        Team::create(array(
            'name' => 'Coolos',
            'thumb' => 'uploads/teams/thumbDefault.jpg',
            'image' => 'uploads/teams/default.jpg',
            'user_id' => User::where('email','=','thiry.jeremy@gmail.com')->first()->id,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));

	}

}
