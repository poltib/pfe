<?php

class EventTypesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('eventtypes')->truncate();
        DB::table('event_types')->delete();
		EventType::create(array('event_name' => 'race'));


        EventType::create(array('event_name' => 'training'));

		// Uncomment the below to run the seeder
		// DB::table('eventtypes')->insert($eventtypes);
	}

}
