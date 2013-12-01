<?php

class Race extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function user()
    {
        return $this->belongsTo('User');
    }  

    public function comments()
    {
        return $this->hasMany('Comment');
    } 

    public function raceUsers()
    {
        return $this->hasMany('raceUser');
    } 

    public function raceImages()
    {
        return $this->hasMany('raceImage');
    } 

    public function raceSponsors()
    {
        return $this->hasMany('raceSponsor');
    } 
}
