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

    public function images()
    {
        return $this->morphTo('Image', 'imageable');
    }

    public function announces()
    {
        return $this->morphTo('Announce', 'announceable');
    }

    public function forums()
    {
        return $this->morphTo('Forum', 'forumable');
    }

}
