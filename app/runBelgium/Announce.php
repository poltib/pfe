<?php

class Announce extends Eloquent
{

    public function announceable()
    {
        return $this->morphTo();
    }

}
