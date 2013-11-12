<?php

class Comment extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function user()
    {
        return $this->belongsTo('User');
    }  

    public function race()
    {
        return $this->belongsTo('Race');
    }  
}
