<?php

class Training extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
        'name' => 'required',
        'training' => 'required|mimes:gpx,tcx',
        'description' => 'required'
    );

    public static $messages = array(
        'required' => '<span class="errors">Votre :attribute est vide</span>',
        'mimes' => '<span class="errors">L\'extention du fichier n\'est pas valide</span>'
    );

    public static function validate($training)
    {
        $v = Validator::make($training,static::$rules,static::$messages);
        return $v->fails()?$v:true;
    }



    public function user()
    {
        return $this->belongsTo('User');
    }  
}
