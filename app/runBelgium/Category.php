<?php

class Category extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function posts()
    {
        return $this->belongsToMany('Post');
    }   
}
