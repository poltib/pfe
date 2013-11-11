<?php

class Training extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
        'name' => 'required',
        'training' => 'mimes:gpx,tcx',
        'description' => 'required'
    );

    public static function validate($user)
    {
        $v = Validator::make($user,static::$rules);
        return $v->fails()?$v:true;
    }



    public function user()
    {
        return $this->belongsTo('User');
    }  
}
