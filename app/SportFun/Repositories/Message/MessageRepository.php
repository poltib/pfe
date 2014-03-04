<?php namespace SportFun\Repositories\Message;

use \Validator;
//déplacer Input::get(Userid) dans le controlleur
use \Input;

 
class MessageRepository implements MessageInterface
{
  public function findById($id)
  {
    $message = Message::findOrFail($id);

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
      $newMessage->to()->attach($data['to']);

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
}