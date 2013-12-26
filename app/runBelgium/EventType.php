<?php

class EventType extends Eloquent
{

    public function events()
       {
           return $this->hasMany('Event');
       }   

}
