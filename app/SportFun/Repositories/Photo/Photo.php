<?php namespace SportFun\Repositories\Photo;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Photo extends Eloquent
{

    public function photoable()
    {
        return $this->morphTo();
    }

}
