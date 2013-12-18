<?php
 
class CategorieRepository implements CategorieInterface {
 
  public function findById($id)
  {
    $post = Categorie::findOrFail($id);

    if(!$post) throw new NotFoundException('Categorie Not Found');
    return $post;
  }
 
  public function findAll()
  {
    return Categorie::all();
  }
 
  public function paginate($limit = null)
  {
    return Categorie::paginate($limit);
  }


 
  public function store($data)
  {
    $this->validation = Validator::make($data, Categorie::$rules);
    if($this->validation->passes())
    {
      Categorie::create(
        array(
            'username'=>$data['username'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
            ));

      return array( 'validation' => true);
    }
    return array( 
      'validation' => false, 
      'error' => $this->validation);
  }


 
  public function update($id, $data)
  {
    $user = $this->findById($id);

    if($data["photo"]){
        $pictureName = $data['photo']->getClientOriginalName();
        Image::upload($data['photo'], 'users/' . $id, true);
        $data["photo"] = 'http://pfe/uploads/users/'.$id.'/600x400/'.$pictureName;
        $data["thumbs"] = 'http://pfe/uploads/users/'.$id.'/100x100_crop/'.$pictureName;
        $user->fill($data);
    }else{
      $user->fill(array(
          'username' => $data['username'],
          'first_name' => $data['first_name'],
          'email' => $data['email']
        ));
    }
    $this->validate($user->toArray());
    $user->save();
    return $user;
  }
 
  public function destroy($id)
  {
    $user = $this->findById($id);
    $user->delete();
    return true;
  }
 
  public function validate($data)
  {
    $validator = Validator::make($data, Categorie::$rules);
    if($validator->fails()) throw new ValidationException($validator);
    return true;
  }
 
  public function instance($data = array())
  {
    return new Categorie($data);
  }
 
}