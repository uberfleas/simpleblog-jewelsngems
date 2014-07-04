<?php

class Post extends Eloquent {

	protected $fillable = array('content','title');

	public static $rules = array();

	//---Inverse Relationship Definitions
	public function user() {
		return $this->belongsTo('User');
	}
	

	//---Relationship Definitions
	
	//---Scopes
	
	public function scopeIdDescending($query)
    {
        return $query->orderBy('id','desc');
    } 

}