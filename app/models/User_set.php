<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserSet extends Eloquent {

    protected $table='user_sets';
 
    public $timestamps = FALSE;
 
    protected $guarded = array();
 
    public static $rules = array(
		'idx_exercice' => 'required',
		'idx_user' => 'required',
		'made_at' => 'required'
	);
}