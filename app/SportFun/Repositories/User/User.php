<?php namespace SportFun\Repositories\User;

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Model as Eloquent;
use \Str;


class User extends Eloquent implements UserInterface, RemindableInterface
{
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
        return $this->hasMany('Message', 'from');
    }


    public function happenings()
    {
        return $this->hasMany('Happening');
    }   

    public function posts()
    {
        return $this->hasMany('Post');
    }   

    public function teams()
    {
        return $this->hasMany('Team');
    }   

    public function announces() 
    {
        return $this->morphMany( 'Announce', 'announcable' );
    }

    public function forums()
    {
        return $this->hasMany('Forum');
    }

    public function postedAnnounces()
    {
        return $this->hasMany('Announce');
    } 

    public function teamPart()
    {
        return $this->belongsToMany('Team');
    }   

    public function happeningParticip()
    {
        return $this->belongsToMany('Happening');
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

    public function setSlugAttribute($value)
    {

        $slug = Str::slug($value);

        $slugCount = count( $this->whereRaw("slug REGEXP '^{$slug}(-[0-9]*)?$'")->get() );

        $slugFinal = ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;

        $this->attributes['slug'] = $slugFinal;

    }

}