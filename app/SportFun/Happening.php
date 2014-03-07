<?php namespace SportFun;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Str;


class Happening extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
        'name' => 'required',
        'file' => 'required',
        'description' => 'required'
    );

    public static $messages = array(
        'required' => '<span class="errors">Votre :attribute est vide</span>',
        'mimes' => '<span class="errors">L\'extention du fichier n\'est pas valide</span>'
    );

    public function getDates()
    {
        return array_merge(parent::getDates(), array('date'));
    }

    public function user()
    {
        return $this->belongsTo('User');
    }  

    public function forums()
    {
        return $this->morphMany('Forum', 'forumable');
    } 

    public function photos()
    {
        return $this->morphMany('Photo', 'photoable');
    } 

    public function announces()
    {
        return $this->morphTo('Announce', 'announceable');
    } 

    public function users()
    {
        return $this->belongsToMany('User');
    } 

    public function sponsors()
    {
        return $this->hasMany('Sponsor');
    } 


    public function setSlugAttribute($value)

    {
        $slug = Str::slug($value);

        $slugCount = count( $this->whereRaw("slug REGEXP '^{$slug}(-[0-9]*)?$'")->get() );

        $slugFinal = ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;

        $this->attributes['slug'] = $slugFinal;

    }
}
