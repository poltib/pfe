<?php namespace SportFun\Repositories\Category;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
	protected $guarded = array();

	public static $rules = array();

    public function posts()
    {
        return $this->belongsToMany('Post');
    }   
}
