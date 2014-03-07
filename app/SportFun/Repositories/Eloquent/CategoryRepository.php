<?php namespace SportFun\Repositories\Eloquent;

use SportFun\Repositories\CategoryInterface;
use \Category;
 
class CategoryRepository implements CategoryInterface
{
 
  public function findById($id)
  {
    $post = Category::findOrFail($id);

    if(!$post) throw new NotFoundException('Categorie Not Found');
    return $post;
  }
 
  public function findAll()
  {
    return Category::all();
  }
 
  public function store($data)
  {
    $this->validation = Validator::make($data, Category::$rules);
    if($this->validation->passes())
    {
      Category::create(
        array( ));

      return array( 'validation' => true);
    }
    return array( 
      'validation' => false, 
      'error' => $this->validation);
  }


 
  public function update($id, $data)
  {
    $category = $this->findById($id);

    $category->fill(array());

    $this->validate($category->toArray());
    $category->save();
    return $category;
  }
 
  public function destroy($id)
  {
    $category = $this->findById($id);
    $category->delete();
    return true;
  }
 
  public function validate($data)
  {
    $validator = Validator::make($data, Category::$rules);
    if($validator->fails()) throw new ValidationException($validator);
    return true;
  }

}