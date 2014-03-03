<?php namespace SportFun\Repositories\EventType;

use Illuminate\Database\Eloquent\Model as Eloquent;

class EventType extends Eloquent
{

    public function events()
       {
           return $this->hasMany('Event');
       }   

}
