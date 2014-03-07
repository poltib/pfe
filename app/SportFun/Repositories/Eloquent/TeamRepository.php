<?php namespace SportFun\Repositories\Eloquent;

use SportFun\Repositories\TeamInterface;
use \Team;
 
class TeamRepository implements TeamInterface {
 
  public function findById($id)
  {
    $team = Team::findOrFail($id);

    if(!$team) throw new NotFoundException('Team Not Found');
    return $team;
  }
 
  public function findAll()
  {
    return Team::all();
  }
 
  public function store($data)
  {
    $this->validation = Validator::make($data, Team::$rules);
    if($this->validation->passes())
    {
      Team::create(array(

      ));
      return array( 'validation' => true);
    }
    return array( 
      'validation' => false, 
      'error' => $this->validation);
  }


 
  public function update($id, $data)
  {
    $team = $this->findById($id);

    if($data["photo"]){
        $pictureName = $data['photo']->getClientOriginalName();
        Image::upload($data['photo'], 'teams/' . $id, true);
        $data["photo"] = 'http://pfe/uploads/teams/'.$id.'/600x400/'.$pictureName;
        $data["thumb"] = 'http://pfe/uploads/teams/'.$id.'/100x100_crop/'.$pictureName;
        $team->fill($data);
    }else{
      $team->fill(array(
          'title' => $data['title'],
          'team' => $data['team']
        ));
    }

    $this->validate($team->toArray());
    $team->save();
    return $team;
  }
 
  public function destroy($id)
  {
    $team = $this->findById($id);
    $team->delete();
    return true;
  }
 
  public function validate($data)
  {
    $validator = Validator::make($data, Team::$rules);
    if($validator->fails()) throw new ValidationException($validator);
    return true;
  }
}