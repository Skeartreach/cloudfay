<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Measurement extends Eloquent {

    protected $table='measurements';
 
    public $timestamps = FALSE;
 
    protected $guarded = array();
 
    public static $rules = array(
		'weight' => 'required',
		'height' => 'required',
		'idx_level' => 'required',
		'idx_user' => 'required',
		'created_at' => 'required'
	);
}