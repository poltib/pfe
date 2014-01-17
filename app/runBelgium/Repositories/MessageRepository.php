<?php
 
class MessageRepository implements MessageInterface {
 
  public function findById($id)
  {
    $message = Message::findOrFail($id);

    if(!$message) throw new NotFoundException('Message Not Found');
    return $message;
  }

  public function findConv($id, $from)
  {
    $messages = Message::with('to', 'user')
                        ->where('message_user.user_id', '=', $id)
                        ->where('from', '=', $from)
                        ->get();

    dd($messages);

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
    $message = $this->findById($id);
    $message->delete();
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