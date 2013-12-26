<?php

class SponsorsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('sponsors')->delete();
        Sponsor::create(array(
            'name' => 'coca', 
            'happening_id' => Happening::where('name','=','race1')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));

        Sponsor::create(array(
            'name' => 'pepsi', 
            'happening_id' => Happening::where('name','=','race1')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'apple', 
            'happening_id' => Happening::where('name','=','race1')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'coca', 
            'happening_id' => Happening::where('name','=','race2')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'coca', 
            'happening_id' => Happening::where('name','=','race3')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'coca', 
            'happening_id' => Happening::where('name','=','training1')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'coca', 
            'happening_id' => Happening::where('name','=','training2')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'coca', 
            'happening_id' => Happening::where('name','=','training3')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'pepsi', 
            'happening_id' => Happening::where('name','=','training1')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'pepsi', 
            'happening_id' => Happening::where('name','=','training2')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'pepsi', 
            'happening_id' => Happening::where('name','=','training3')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'apple', 
            'happening_id' => Happening::where('name','=','training1')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'apple', 
            'happening_id' => Happening::where('name','=','training2')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
        Sponsor::create(array(
            'name' => 'apple', 
            'happening_id' => Happening::where('name','=','training3')->first()->id,
            'local' => 1,
            'address' => 'rue Haute 11 4400 Flémalle',
            'thumb' => 'http://pfe/uploads/sponsors/thumbDefault.jpg',
            'image' => 'http://pfe/uploads/sponsors/default.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.'));
        
	}

}
