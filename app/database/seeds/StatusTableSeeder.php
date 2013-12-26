<?php

class StatusTableSeeder extends Seeder {

    public function run()
    {
        DB::table('status')->delete();
        Statu::create(array('status_name' => 'participe'));

        Statu::create(array('status_name' => 'Ne participe pas'));

        Statu::create(array('status_name' => 'Peut-être'));
    }

}
