<?php

class HappeningUserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('happening_user')->delete();

        $happening_user = 
        [
            [
                'happening_id' => Happening::where('name','=','race1')->first()->id,
                'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race1')->first()->id,
                'user_id' => User::where('email','=','thiry.jeremy@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race1')->first()->id,
                'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race1')->first()->id,
                'user_id' => User::where('email','=','thiry.th@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race1')->first()->id,
                'user_id' => User::where('email','=','simon.loser@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race2')->first()->id,
                'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race2')->first()->id,
                'user_id' => User::where('email','=','thiry.th@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race3')->first()->id,
                'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race3')->first()->id,
                'user_id' => User::where('email','=','thiry.jeremy@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race3')->first()->id,
                'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race3')->first()->id,
                'user_id' => User::where('email','=','thiry.th@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','race3')->first()->id,
                'user_id' => User::where('email','=','simon.loser@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','training1')->first()->id,
                'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','training1')->first()->id,
                'user_id' => User::where('email','=','thiry.jeremy@gmail')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','training1')->first()->id,
                'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','training1')->first()->id,
                'user_id' => User::where('email','=','thiry.th@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','training1')->first()->id,
                'user_id' => User::where('email','=','simon.loser@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','training2')->first()->id,
                'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','training2')->first()->id,
                'user_id' => User::where('email','=','thiry.th@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','training3')->first()->id,
                'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'happening_id' => Happening::where('name','=','training3')->first()->id,
                'user_id' => User::where('email','=','thiry.th@gmail.com')->first()->id,
                'statu_id' => Statu::where('status_name','=','participe')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        ];

        DB::table('happening_user')->insert($happening_user);
	}

}
