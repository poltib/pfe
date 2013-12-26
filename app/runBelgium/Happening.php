<?php

class Happening extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
        'name' => 'required',
        'file' => 'required',
        'description' => 'required'
    );

    public static $messages = array(
        'required' => '<span class="errors">Votre :attribute est vide</span>',
        'mimes' => '<span class="errors">L\'extention du fichier n\'est pas valide</span>'
    );

    public function event()
    {
        return $this->belongsTo('Event');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }  

    public function forums()
    {
        return $this->morphTo('Forum', 'forumable');
    } 

    public function images()
    {
        return $this->morphTo('Image', 'imageable');
    } 

    public function announces()
    {
        return $this->morphTo('Announce', 'announceable');
    } 

    public function users()
    {
        return $this->belongsToMany('User');
    } 

    public function sponsors()
    {
        return $this->hasMany('Sponsor');
    } 
}
