<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent {

    protected $table='users';
 
    public $timestamps = FALSE;
 
    protected $guarded = array();
 
    public static $rules = array(
		'lastname' => 'required',
		'firstname' => 'required',
		'username' => 'required',
		'password' => 'required',
		'email' => 'required',
		'birthdate' => 'required',
		'created_at' => 'required'
	);
}