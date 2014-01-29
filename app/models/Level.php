<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Level extends Eloquent {

    protected $table='levels';
 
    public $timestamps = FALSE;
 
    protected $guarded = array();
 
    public static $rules = array(
		'nom' => 'required',
		'idx_exercices_set' => 'required'
	);
}