<?php
 
class MessageRepository implements MessageInterface {
 
  public function findById($id)
  {
    $message = Message::findOrFail($id);

    if(!$message) throw new NotFoundException('Message Not Found');
    return $message;
  }
 
  public function findAll()
  {
    return Message::orderBy('created_at', 'desc');
  }
 
  public function paginate($limit = null)
  {
    return Message::paginate($limit);
  }


 
  public function store($data)
  {
    $this->validation = Validator::make($data, Message::$rules);
    if($this->validation->passes())
    {
      Message::create(
        array(
          'objet' => $data['objet'],
          'message' => $data['message'],
          'from' => $data['from']
            ));
      $newMessage = Message::orderBy('created_at', 'desc')->first();
      $newMessage->to()->attach(Input::get('user_id'));

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

  public function send($data)
  {
    $user = array(
        'username' => $data['username'],
        'password' => $data['password']
    );
    return Auth::attempt($user);
  }


  public function destroy($id)
  {
    $user = $this->findById($id);
    $user->delete();
    return true;
  }
 
  public function validate($data)
  {
    $validator = Validator::make($data, Message::$rules);
    if($validator->fails()) throw new ValidationException($validator);
    return true;
  }
 
  public function instance($data = array())
  {
    return new Message($data);
  }
 
}