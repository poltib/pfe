<?php namespace SportFun\Repositories\Sponsor;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Sponsor extends Eloquent
{
    protected $guarded = array();

    public static $rules = array();

    public function event()
    {
        return $this->belongsTo('Event');
    }  
}
