<?php 
class SlugSeeder extends Seeder {


    private $slugs;

    public function __construct()
    {
        $this->slugs = [];
    }

    public function run()
    {
        $happenings = Happening::all();
        foreach($happenings as $happening){
            $happening->slug = $this->getUniqueSlug([$happening->name,$happening->date->toFormattedDateString()]);
            $happening->save();
        }

        $users = User::all();
        foreach($users as $user){
            $user->slug = $this->getUniqueSlug([$user->first_name,$user->name]);
            $user->save();
        }
        
        $teams = Team::all();
        foreach($teams as $team){
            $team->slug = $this->getUniqueSlug([$team->name,$team->place]);
            $team->save();
        }
        
        $posts = Post::all();
        foreach($posts as $post){
            $post->slug = $this->getUniqueSlug([$post->title, $post->created_at->toFormattedDateString()]);
            $post->save();
        }



    }

    private function getUniqueSlug($parts){

        $baseSlug = Str::slug(implode('-',$parts));
        
        $i = 1;
        
        while(in_array($baseSlug.($i>1?'-'.$i:''),$this->slugs))
        {
            $i++;
        }

        $this->slugs[] = $baseSlug.=($i>1?'-'.$i:'');

        return $baseSlug;

    }

}