<?php

class Forum extends Eloquent
{

    public function forumable()
    {
        return $this->morphTo();
    }

}
