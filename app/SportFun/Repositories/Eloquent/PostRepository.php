<?php namespace SportFun\Repositories\Eloquent;

use SportFun\Repositories\PostInterface;
use \Post;
 
class PostRepository implements PostInterface
{
  public function findById($id)
  {
    $post = Post::findOrFail($id);

    if(!$post) throw new NotFoundException('Post Not Found');
    return $post;
  }
 
  public function findAll()
  {
      return Post::with('categories')->orderBy('created_at', 'desc')->paginate(4);
      //return Post::with('categories')->get();

  }
 
  public function store($data)
  {
    $this->validation = Validator::make($data, Post::$rules);
    if($this->validation->passes())
    {
      $cat = $data['categories'];
      if($data["photo"]){
          $pictureName = $data['photo']->getClientOriginalName();
          Image::upload($data['photo'], 'posts/' . $data['title'], true);
          $data["photo"] = 'http://pfe/uploads/posts/'.$data['title'].'/600x400/'.$pictureName;
          $data["thumb"] = 'http://pfe/uploads/posts/'.$data['title'].'/100x100_crop/'.$pictureName;
      }
      Post::create(array(
          'title' => $data['title'],
          'post' => $data['post'],
          'user_id' => $data['user_id'],
          'image' => $data["photo"],
          'thumb' => $data["thumb"]
      ));

      $newPost = Post::orderBy('created_at', 'desc')->first();

      for($i=0; $i <= count($cat)-1; $i++){
          $newPost->categories()->attach($newPost->id, array('categorie_id'=> $cat[$i]));
      }

      return array( 'validation' => true);
    }
    return array( 
      'validation' => false, 
      'error' => $this->validation);
  }


 
  public function update($id, $data)
  {
    $post = $this->findById($id);
    $cat = $data['categories'];

    if($data["photo"]){
        $pictureName = $data['photo']->getClientOriginalName();
        Image::upload($data['photo'], 'posts/' . $id, true);
        $data["photo"] = 'http://pfe/uploads/posts/'.$id.'/600x400/'.$pictureName;
        $data["thumb"] = 'http://pfe/uploads/posts/'.$id.'/100x100_crop/'.$pictureName;
        $post->fill($data);
    }else{
      $post->fill(array(
          'title' => $data['title'],
          'post' => $data['post']
        ));
    }

    for($i=0; $i <= count($cat)-1; $i++){
        $post->categories()->attach($id, array('categorie_id'=> $cat[$i]));
    }

    $this->validate($post->toArray());
    $post->save();
    return $post;
  }
 
  public function destroy($id)
  {
    $user = $this->findById($id);
    $user->delete();
    return true;
  }
 
  public function validate($data)
  {
    $validator = Validator::make($data, Post::$rules);
    if($validator->fails()) throw new ValidationException($validator);
    return true;
  }
}