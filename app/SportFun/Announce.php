<?php namespace SportFun;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Announce extends Eloquent
{

    public function announceable()
    {
        return $this->morphTo();
    }

}
