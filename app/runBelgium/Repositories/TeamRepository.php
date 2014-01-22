<?php
 
class TeamRepository implements TeamInterface {
 
  public function findById($id)
  {
    $post = Team::findOrFail($id);

    if(!$post) throw new NotFoundException('Team Not Found');
    return $post;
  }
 
  public function findAll()
  {
    return Team::all();
  }
 
  public function paginate($limit = null)
  {
    return Team::paginate($limit);
  }


 
  public function store($data)
  {
    $this->validation = Validator::make($data, Team::$rules);
    if($this->validation->passes())
    {
      $cat = $data['categories'];
      if($data["photo"]){
          $pictureName = $data['photo']->getClientOriginalName();
          Image::upload($data['photo'], 'posts/' . $data['title'], true);
          $data["photo"] = 'http://pfe/uploads/posts/'.$data['title'].'/600x400/'.$pictureName;
          $data["thumb"] = 'http://pfe/uploads/posts/'.$data['title'].'/100x100_crop/'.$pictureName;
      }
      Team::create(array(
          'title' => $data['title'],
          'post' => $data['post'],
          'user_id' => $data['user_id'],
          'image' => $data["photo"],
          'thumb' => $data["thumb"]
      ));

      $newPost = Team::orderBy('created_at', 'desc')->first();

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
    $validator = Validator::make($data, Team::$rules);
    if($validator->fails()) throw new ValidationException($validator);
    return true;
  }
 
  public function instance($data = array())
  {
    return new User($data);
  }
 
}