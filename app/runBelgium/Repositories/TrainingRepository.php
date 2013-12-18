<?php
 
class TrainingRepository implements TrainingInterface {
 
  public function findById($id)
  {
    $training = Training::findOrFail($id);

    $trainingCoords = Xml::readXml($training->ext, $training->training);

    $trainingPoints = $trainingCoords['coords'];

    $training->distance = $trainingCoords['dist'];
    
    if(!$training) throw new NotFoundException('Training Not Found');
    return array(
      'training' => $training, 
      'trainingPoints' => $trainingPoints);
  }
 
  public function findAll()
  {
    return Training::all();
  }
 
  public function paginate($limit = null)
  {
    return Training::paginate($limit);
  }


 
  public function store($data)
  {
    $this->validation = Validator::make($data, Training::$rules);
    if($this->validation->passes())
    {
      $training = $data['training']; // your file upload input field in the form should be named 'file'
      $destinationPath = 'uploads/trainings';
      $extension =$training->getClientOriginalExtension(); //if you need extension of the file
      $filename = str_random(12).'.'.$extension;
      $uploadSuccess = $data['training']->move($destinationPath, $filename);

      Training::create(array(
        'name'=>$data['name'],
        'description'=>$data['description'],
        'user_id'=>$data['user_id'],
        'ext'=>$extension,
        'training'=>$destinationPath."/".$filename
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
    $validator = Validator::make($data, Training::$rules);
    if($validator->fails()) throw new ValidationException($validator);
    return true;
  }
 
  public function instance($data = array())
  {
    return new Training($data);
  }
 
}