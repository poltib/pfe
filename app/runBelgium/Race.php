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

    public function users()
    {
        return $this->belongsToMany('User');
    } 

    public function raceImages()
    {
        return $this->hasMany('RaceImage');
    } 

    public function raceSponsors()
    {
        return $this->hasMany('RaceSponsor');
    } 
}
