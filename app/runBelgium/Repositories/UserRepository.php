<?php
 
class UserRepository implements UserRunInterface {
 
  public function findById($id)
  {
    $user = User::findOrFail($id);

    if(!$user) throw new NotFoundException('User Not Found');
    return $user;
  }
 
  public function findAll()
  {
    return User::all();
  }
 
  public function paginate($limit = null)
  {
    return User::paginate($limit);
  }


 
  public function store($data)
  {
    $this->validation = Validator::make($data, User::$rules);
    if($this->validation->passes())
    {
      $user = new User;
      $user->username = $data['username'];
      $user->email = $data['email'];
      $user->password = Hash::make($data['password']);
      $user->setSlugAttribute($data['username']);
      $user->save();

      return array( 'validation' => true);
    }
    return array( 
      'validation' => false, 
      'error' => $this->validation);
  }


 
  public function update($id, $data)
  {
    $user = $this->findById($id);

    if($data["image"]){
        $path = Image::upload($data['image'], 'users/' . $id, true);
        $data["image"] = $path['image'];
        $data["thumb"] = $path['thumb'];
        $user->fill($data);
    }else{
      $user->fill(array(
          'username' => $data['username'],
          'first_name' => $data['first_name'],
          'name' => $data['name'],
          'email' => $data['email'],
          'description' => $data['description'],
        ));
    }
    //$this->validate($user->toArray());
    $user->save();
    return $user;
  }

  public function connection($data)
  {
    $user = array(
        'username' => $data['username'],
        'password' => $data['password']
    );
    if(isset($data['remember'])){
      return Auth::attempt($user, $data['remember']);
    }else{
      return Auth::attempt($user);
    }
  }

  public function raceParticip($data)
  {
    $user = $this->findById($data['user_id']);
    $user->happeningParticip()->attach($data['happening_id']);
  }

  public function raceDontParticip($data)
  {
    $user = $this->findById($data['user_id']);
    $user->happeningParticip()->detach($data['happening_id']);
  }
 
  public function destroy($id)
  {
    $user = $this->findById($id);
    $user->delete();
    return true;
  }
 
  public function validate($data)
  {
    $validator = Validator::make($data, User::$rules);
    if($validator->fails()) throw new ValidationException($validator);
    return true;
  }
 
  public function instance($data = array())
  {
    return new User($data);
  }
 
}