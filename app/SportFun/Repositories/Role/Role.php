<?php namespace SportFun\Repositories\Role;

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
