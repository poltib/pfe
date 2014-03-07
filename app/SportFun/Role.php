<?php namespace SportFun;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Role extends Eloquent
{

    protected $guarded = array();  // Important

    public static $rules = array();

    public function users () 
    {
        return $this->belongsToMany('User');
    }

}
