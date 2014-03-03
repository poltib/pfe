<?php namespace SportFun\Repositories\Forum;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Forum extends Eloquent
{

    public function forumable()
    {
        return $this->morphTo();
    }

}
