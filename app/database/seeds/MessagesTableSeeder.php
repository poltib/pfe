<?php

class MessagesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('messages')->truncate();

		DB::table('messages')->delete();
        Message::create(array(
            'objet' => 'salut!',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'from' => User::where('email','=','plop.plop@gmail.com')->first()->id
        ));

        Message::create(array(
            'objet' => 'plop!',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'from' => User::where('email','=','thiry.jeremy@gmail.com')->first()->id
        ));

        Message::create(array(
            'objet' => 're!',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'from' => User::where('email','=','thiry.th@gmail.com')->first()->id
        ));

        Message::create(array(
            'objet' => 'info!',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'from' => User::where('email','=','nick.plop@gmail.com')->first()->id
        ));

        Message::create(array(
            'objet' => 'salut2!',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'from' => User::where('email','=','thiry.jeremy@gmail.com')->first()->id
        ));

        Message::create(array(
            'objet' => 'coucou!',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'from' => User::where('email','=','simon.loser@gmail.com')->first()->id
        ));



		// Uncomment the below to run the seeder
		// DB::table('messages')->insert($messages);
	}

}
