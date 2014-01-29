<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Training extends Eloquent {

    protected $table='trainings';
 
    public $timestamps = FALSE;
 
    protected $guarded = array();
 
    public static $rules = array(
		'date' => 'required',
		'idx_user_set' => 'required',
		'length' => 'required',
		'idx_user' => 'required'
	);
}