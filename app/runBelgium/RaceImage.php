<?php

class RaceImage extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function race()
    {
        return $this->belongsTo('Race');
    }  
}
