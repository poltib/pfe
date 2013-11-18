<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	protected $guarded = array();  // Important

	public static $rules = array(
		'username' => 'required|unique:users',
		'email' => 'required|email|unique:users',
		'password' => 'required|min:6'
	);

	public static function validate($user)
    {
        $v = Validator::make($user,static::$rules);
        return $v->fails()?$v:true;
    }

    public function messages()
    {
        return $this->belongsToMany('Message');
    }

    public function message()
    {
        return $this->hasMany('Messages', 'from');
    }


    public function trainings()
    {
        return $this->hasMany('Training');
    }   

    public function races()
    {
        return $this->hasMany('Race');
    }   

    public function posts()
    {
        return $this->hasMany('Post');
    }   

    public function comments()
    {
        return $this->hasMany('Comment');
    }   

    public function raceUsers()
    {
        return $this->hasMany('raceUser');
    } 
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}