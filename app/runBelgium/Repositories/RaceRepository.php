<?php
 
class RaceRepository implements RaceInterface {
 
  public function findById($id)
  {
    $race = Race::findOrFail($id);

    $raceCoords = Xml::readXml($race->ext, $race->race);

    $racePoints = $raceCoords['coords'];

    $race->distance = $raceCoords['dist'];

    if(!$race) throw new NotFoundException('Race Not Found');
    return array(
      'race' => $race, 
      'racePoints' => $racePoints);
  }
 
  public function findAll()
  {
    return Race::all();
  }
 
  public function paginate($limit = null)
  {
    return Race::paginate($limit);
  }


 
  public function store($data)
  {
    $this->validation = Validator::make($data, Race::$rules);
    if($this->validation->passes())
    {
      $race = $data['race']; // your file upload input field in the form should be named 'file'
      $destinationPath = 'uploads/races/trace';
      $extension =$race->getClientOriginalExtension(); //if you need extension of the file
      $filename = str_random(12).'.'.$extension;
      $uploadSuccess = $data['race']->move($destinationPath, $filename);

      Race::create(array(
        'name'=>$data['name'],
        'description'=>$data['description'],
        'address'=>$data['address'],
        'user_id'=>$data['user_id'],
        'ext'=>$extension,
        'race'=>$destinationPath."/".$filename
        ));
      $newRace = Race::orderBy('created_at', 'desc')->first();
      return array( 'validation' => true, 'id' => $newRace->id,);
    }
    return array( 
      'validation' => false, 
      'error' => $this->validation);
  }





  public function storeSponsor($data)
  {
    $this->validation = Validator::make($data, RaceSponsor::$rules);
    if($this->validation->passes())
    {

    $pictureName = $data['image']->getClientOriginalName();
    Image::upload($data['image'], 'races/' . $data["race_id"].'/sponsors', true);
    $data["image"] = 'http://pfe/uploads/races/'.$data["race_id"].'/sponsors/600x400/'.$pictureName;
    $data["thumb"] = 'http://pfe/uploads/races/'.$data["race_id"].'/sponsors/100x100_crop/'.$pictureName;
    RaceSponsor::create($data);

      return array( 'validation' => true);
    }
    return array( 
      'validation' => false, 
      'error' => $this->validation);
  }





  public function storeImage($data)
  {
    $this->validation = Validator::make($data, RaceImage::$rules);

    if($this->validation->passes())
    {
      $pictureName = $data['image']->getClientOriginalName();
      Image::upload($data['image'], 'races/' . $data["race_id"].'/galery', true);
      $data["image"] = 'http://pfe/uploads/races/'.$data["race_id"].'/galery/600x400/'.$pictureName;
      $data["thumb"] = 'http://pfe/uploads/races/'.$data["race_id"].'/galery/100x100_crop/'.$pictureName;

      RaceImage::create($data);

      return array( 'validation' => true);
    }
    return array( 
      'validation' => false, 
      'error' => $this->validation);
  }



  public function storeComment($data)
  {
    $this->validation = Validator::make($data, Comment::$rules);

    if($this->validation->passes())
    {

      Comment::create($data);

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

  public function destroyComment($id)
  {
    $comment = Comment::findOrFail($id);
    $comment->delete();
    return true;
  }
 
  public function validate($data)
  {
    $v = Validator::make($data, User::$rules);
    return $v->fails()?$v:true;
  }
 
  public function instance($data = array())
  {
    return new Race($data);
  }
 
}