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
      User::create(
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

    if($data["image"]){
        $pictureName = $data['image']->getClientOriginalName();
        Image::upload($data['image'], 'users/' . $id, true);
        $data["image"] = 'http://pfe/uploads/users/'.$id.'/600x400/'.$pictureName;
        $data["thumb"] = 'http://pfe/uploads/users/'.$id.'/100x100_crop/'.$pictureName;
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

  public function connection($data)
  {
    $user = array(
        'username' => $data['username'],
        'password' => $data['password']
    );
    return Auth::attempt($user);
  }

  public function raceParticip($data)
  {
    $user = $this->user->find(Input::get('user_id'));
    $user->races()->attach(Input::get('race_id'));
  }

  public function raceDontParticip($data)
  {
    $user = $this->user->find(Input::get('user_id'));
    $user->races()->detach(Input::get('race_id'));
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