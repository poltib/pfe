<?php

    class UserTableSeeder extends Seeder
    {

        public function run()
        {
            DB::table('users')->delete();
            User::create(array(
                'username' => 'admin', 
                'first_name' => 'Nick', 
                'password' => Hash::make('admin'),
                'email' => 'nick.plop@gmail.com'));
        }

    }