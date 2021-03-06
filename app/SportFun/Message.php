<?php namespace SportFun;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Message extends Eloquent
{
	protected $guarded = array();

	public static $rules = array();

    public function user()
    {
        return $this->belongsTo('User', 'from');
    }

    public function to()
    {
        return $this->belongsToMany('User');
    }
}
