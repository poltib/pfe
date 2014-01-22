<?php

class Photo extends Eloquent
{

    public function imageable()
    {
        return $this->morphTo();
    }

}
