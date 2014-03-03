<?php namespace SportFun\Repositories\User;

use Illuminate\Support\Facades\Auth as Auth;
 
class UserRepository implements UserSportInterface {
 
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
    $credentials = array(
        'username' => $data['username'],
        'password' => $data['password']
    );

      $remember = isset( $data['remember'] ) ?: false;

      return Auth::attempt($credentials, $remember);
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
    $v = Validator::make($data, User::$rules);
    return $v->fails()?$v:true;
  }
}