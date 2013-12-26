<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('posts')->truncate();

		DB::table('posts')->delete();
        Post::create(array(
            'title' => 'post seed',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.',
            'thumb' => 'http://pfe/uploads/posts/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/posts/default.jpg',
            'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id
        ));

        Post::create(array(
            'title' => 'post test',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.',
            'thumb' => 'http://pfe/uploads/posts/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/posts/default.jpg',
            'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id
        ));

        Post::create(array(
            'title' => 'post super',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.',
            'thumb' => 'http://pfe/uploads/posts/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/posts/default.jpg',
            'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id
        ));

        Post::create(array(
            'title' => 'post seeder ouf',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.',
            'thumb' => 'http://pfe/uploads/posts/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/posts/default.jpg',
            'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id
        ));

        Post::create(array(
            'title' => 'post de fou',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.',
            'thumb' => 'http://pfe/uploads/posts/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/posts/default.jpg',
            'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id
        ));

        Post::create(array(
            'title' => 'post de la mort',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.',
            'thumb' => 'http://pfe/uploads/posts/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/posts/default.jpg',
            'user_id' => User::where('email','=','nick.plop@gmail.com')->first()->id
        ));



		// Uncomment the below to run the seeder
		// DB::table('posts')->insert($posts);
	}

}
