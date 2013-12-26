<?php

class CategoryPostTableSeeder extends Seeder {

	public function run()
	{
		DB::table('category_post')->delete();

        $category_post = 
        [
            [
                'category_id' => Category::where('name','=','Chaussures')->first()->id,
                'post_id' => Post::where('title','=','post seed')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'category_id' => Category::where('name','=','Conseils')->first()->id,
                'post_id' => Post::where('title','=','post seed')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'category_id' => Category::where('name','=','Chaussures')->first()->id,
                'post_id' => Post::where('title','=','post test')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'category_id' => Category::where('name','=','Entrainements')->first()->id,
                'post_id' => Post::where('title','=','post super')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'category_id' => Category::where('name','=','Vêtements')->first()->id,
                'post_id' => Post::where('title','=','post seeder ouf')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'category_id' => Category::where('name','=','Groupes')->first()->id,
                'post_id' => Post::where('title','=','post de fou')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'category_id' => Category::where('name','=','Conseils')->first()->id,
                'post_id' => Post::where('title','=','post de la mort')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'category_id' => Category::where('name','=','Groupes')->first()->id,
                'post_id' => Post::where('title','=','post de la mort')->first()->id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        ];

        DB::table('category_post')->insert($category_post);
	}

}
