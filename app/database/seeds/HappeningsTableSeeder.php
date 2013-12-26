<?php
class HappeningsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('events')->truncate();

	  DB::table('happenings')->delete();
        Happening::create(array(
            'name' => 'race1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'file_name' => 'http://pfe/uploads/events/default.tcx',
            'file_ext' => 'tcx',
            'eventType_id' => EventType::where('event_name','=','race')->first()->id,
            'link' => 'plop',
            'address' => 'rue Haute 11 4400 Flémalle',
            'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id
            ));
        Happening::create(array(
            'name' => 'race2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'file_name' => 'http://pfe/uploads/events/default.tcx',
            'file_ext' => 'tcx',
            'eventType_id' => EventType::where('event_name','=','race')->first()->id,
            'link' => 'plop',
            'address' => 'rue Haute 11 4400 Flémalle',
            'user_id' => User::where('email','=','plop.plop@gmail.com')->first()->id
            ));
        Happening::create(array(
            'name' => 'race3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'file_name' => 'http://pfe/uploads/events/default.tcx',
            'file_ext' => 'tcx',
            'eventType_id' => EventType::where('event_name','=','race')->first()->id,
            'link' => 'plop',
            'address' => 'rue Haute 11 4400 Flémalle',
            'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id
            ));
        Happening::create(array(
            'name' => 'training1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'file_name' => 'http://pfe/uploads/events/default.tcx',
            'file_ext' => 'tcx',
            'eventType_id' => EventType::where('event_name','=','training')->first()->id,
            'link' => 'plop',
            'address' => 'rue Haute 11 4400 Flémalle',
            'user_id' => User::where('email','=','thiry.th@gmail.com')->first()->id
            ));
        Happening::create(array(
            'name' => 'training2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'file_name' => 'http://pfe/uploads/events/default.tcx',
            'file_ext' => 'tcx',
            'eventType_id' => EventType::where('event_name','=','training')->first()->id,
            'link' => 'plop',
            'address' => 'rue Haute 11 4400 Flémalle',
            'user_id' => User::where('email','=','simon.loser@gmail.com')->first()->id
            ));
        Happening::create(array(
            'name' => 'training3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo',
            'file_name' => 'http://pfe/uploads/events/default.tcx',
            'file_ext' => 'tcx',
            'eventType_id' => EventType::where('event_name','=','training')->first()->id,
            'link' => 'plop',
            'address' => 'rue Haute 11 4400 Flémalle',
            'user_id' => User::where('email','=','thiry.jeremy@gmail.com')->first()->id
            ));

		// Uncomment the below to run the seeder
		// DB::table('events')->insert($events);
	}

}
