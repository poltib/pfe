<?php namespace SportFun\Repositories\Forum;
 
class ForumRepository implements ForumInterface
{
 
  public function findById($id)
  {
    $post = Forum::findOrFail($id);

    if(!$post) throw new NotFoundException('Forum Not Found');
    return $post;
  }
 
  public function findAll()
  {
    return Forum::all();
  }

  public function store($data)
  {
    $this->validation = Validator::make($data, Forum::$rules);
    if($this->validation->passes())
    {
      Forum::create(
        array());

      return array( 'validation' => true);
    }
    return array( 
      'validation' => false, 
      'error' => $this->validation);
  }


 
  public function update($id, $data)
  {
    $forum = $this->findById($id);

    $forum->fill(array());

    $this->validate($forum->toArray());
    $forum->save();
    return $forum;
  }
 
  public function destroy($id)
  {
    $forum = $this->findById($id);
    $forum->delete();
    return true;
  }
 
  public function validate($data)
  {
    $validator = Validator::make($data, Forum::$rules);
    if($validator->fails()) throw new ValidationException($validator);
    return true;
  }
}