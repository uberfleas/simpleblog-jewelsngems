<?php

class Post extends Eloquent {

	protected $guarded = array();

	public static $rules = array();

	//---Inverse Relationship Definitions
	public function user() {
		return $this->belongsTo('User');
	}
	

	//---Relationship Definitions

}