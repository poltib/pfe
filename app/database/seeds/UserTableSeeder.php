<?php

    class UserTableSeeder extends Seeder
    {

        public function run()
        {
            DB::table('users')->delete();
            User::create(array(
                'name' => 'admin', 
                'username' => 'admin', 
                'first_name' => 'Nick', 
                'password' => Hash::make('admin'),
                'email' => 'nick.plop@gmail.com',
                'thumb' => 'uploads/users/thumbDefault.jpg',
                'image' => 'uploads/users/default.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));

            User::create(array(
                'name' => 'pol', 
                'username' => 'plop', 
                'first_name' => 'plopil', 
                'password' => Hash::make('plop'),
                'email' => 'plop.plop@gmail.com',
                'thumb' => 'uploads/users/thumbDefault.jpg',
                'image' => 'uploads/users/default.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));

            User::create(array(
                'name' => 'Thiry', 
                'username' => 'poltib', 
                'first_name' => 'Jérémy', 
                'password' => Hash::make('jeremy'),
                'email' => 'thiry.jeremy@gmail.com',
                'thumb' => 'uploads/users/thumbDefault.jpg',
                'image' => 'uploads/users/default.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));

            User::create(array(
                'name' => 'Thiry', 
                'username' => 'grosLaid', 
                'first_name' => 'Thomas', 
                'password' => Hash::make('thomas'),
                'email' => 'thiry.th@gmail.com',
                'thumb' => 'uploads/users/thumbDefault.jpg',
                'image' => 'uploads/users/default.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));

            User::create(array(
                'name' => 'Thiry', 
                'username' => 'petitLaid', 
                'first_name' => 'Simon', 
                'password' => Hash::make('simon'),
                'email' => 'simon.loser@gmail.com',
                'thumb' => 'uploads/users/thumbDefault.jpg',
                'image' => 'uploads/users/default.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        }

    }