<?php

class Team extends Eloquent
{

    public function users()
    {
        return $this->belongsToMany('User');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function photos()
    {
        return $this->morphMany('Photo', 'imageable');
    }

    public function announces()
    {
        return $this->morphMany('Announce', 'announceable');
    }

    public function forums()
    {
        return $this->morphMany('Forum', 'forumable');
    }

}
