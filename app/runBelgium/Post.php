<?php

class Post extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function user()
    {
        return $this->belongsTo('User');
    }  

    public function categories()
    {
        return $this->belongsToMany('Category');
    }  

    public function forums()
    {
        return $this->morphTo('Forum', 'forumable');
    }
}
