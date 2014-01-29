<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Exercice extends Eloquent {

    protected $table='exercices';
 
    public $timestamps = FALSE;
 
    protected $guarded = array();
 
    public static $rules = array(
		'label' => 'required',
		'name' => 'required',
		'definition' => 'required'
	);
}