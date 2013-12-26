<?php

class TeamUserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('team_user')->delete();

        $team_user = 
        [
            [
                'team_id' => Team::where('name','=','Mons')->first()->id,
                'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'team_id' => Team::where('name','=','Mons')->first()->id,
                'user_id' => User::where('email','=','thiry.jeremy@gmail')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'team_id' => Team::where('name','=','Mons')->first()->id,
                'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'team_id' => Team::where('name','=','Mons')->first()->id,
                'user_id' => User::where('email','=','thiry.th@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'team_id' => Team::where('name','=','Mons')->first()->id,
                'user_id' => User::where('email','=','simon.loser@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'team_id' => Team::where('name','=','Coolos')->first()->id,
                'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'team_id' => Team::where('name','=','Coolos')->first()->id,
                'user_id' => User::where('email','=','thiry.th@gmail.com')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        ];

        DB::table('team_user')->insert($team_user);
	}

}
