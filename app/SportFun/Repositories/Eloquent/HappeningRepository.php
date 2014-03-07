<?php namespace SportFun\Repositories\Eloquent;

use SportFun\Repositories\HappeningInterface;
use SportFun\Services\Xml as Xml;
use \Happening;
 
class HappeningRepository implements HappeningInterface
{
  public function findById($id)
  {
    $happening = Happening::findOrFail($id);

    $happeningCoords = Xml::readXml($happening->file_ext, $happening->file_name);
    //dd($happeningCoords);
    $happeningPoints = $happeningCoords['coords'];

    $happening->distance = $happeningCoords['dist'];

    return array(
      'happening' => $happening, 
      'happeningPoints' => $happeningPoints);
  }
 
  public function findAll()
  {
    return Happening::all();
  }

  public function store($data)
  {
    $this->validation = Validator::make($data, Happening::$rules);

    if($this->validation->passes())
    {
      $race = $data['file'];
      $destinationPath = 'uploads/events/parcours';
      $extension =$race->getClientOriginalExtension();
      $filename = str_random(12).'.'.$extension;
      $uploadSuccess = $data['file']->move($destinationPath, $filename);

      $happening = new Happening;
      $happening->name = $data['name'];
      $happening->description = $data['description'];
      $happening->address = $data['address'];
      $happening->user_id = $data['user_id'];
      $happening->eventType_id = $data['eventType'];
      $happening->file_ext = $extension;
      $happening->file_name = $destinationPath."/".$filename;
      $happening->setSlugAttribute( $data['name'] );
      $happening->save();

      return array( 'validation' => true, 'slug' => $happening->slug,);
    }
    return array( 
      'validation' => false, 
      'error' => $this->validation);
  }





  public function storeSponsor($data)
  {
    $this->validation = Validator::make($data, RaceSponsor::$rules);
    if($this->validation->passes()){

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

  public function validate($data)
  {
    $v = Validator::make($data, User::$rules);
    return $v->fails()?$v:true;
  }

}