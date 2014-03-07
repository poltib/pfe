<?php namespace SportFun\Repositories\Eloquent;

use SportFun\Repositories\EventTypeInterface;
use \EventType;

class EventTypeRepository implements EventTypeInterface
{

    public function findById($id)
    {
        $post = EventType::findOrFail($id);

        if(!$post) throw new NotFoundException('Categorie Not Found');
        return $post;
    }

    public function findAll()
    {
        return EventType::all();
    }

    public function store($data)
    {
        $this->validation = Validator::make($data, Category::$rules);
        if($this->validation->passes())
        {
            Category::create(
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

        $user->fill(array(
            'username' => $data['username'],
            'first_name' => $data['first_name'],
            'email' => $data['email']
        ));

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
        $validator = Validator::make($data, Category::$rules);
        if($validator->fails()) throw new ValidationException($validator);
        return true;
    }

}