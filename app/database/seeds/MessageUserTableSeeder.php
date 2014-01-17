<?php

class MessageUserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('message_user')->delete();

        $message_user = 
        [
            [
                'message_id' => Message::where('objet','=','salut!')->first()->id,
                'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'message_id' => Message::where('objet','=','plop!')->first()->id,
                'user_id' => User::where('email','=','thiry.jeremy@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'message_id' => Message::where('objet','=','re!')->first()->id,
                'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'message_id' => Message::where('objet','=','info!')->first()->id,
                'user_id' => User::where('email','=','thiry.th@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'message_id' => Message::where('objet','=','salut2!')->first()->id,
                'user_id' => User::where('email','=','simon.loser@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'message_id' => Message::where('objet','=','coucou!')->first()->id,
                'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        ];

        DB::table('message_user')->insert($message_user);
	}

}
