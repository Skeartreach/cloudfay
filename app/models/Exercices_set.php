<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class ExercicesSet extends Eloquent {

    protected $table='exercices_sets';
 
    public $timestamps = true;
 
    protected $guarded = array();
 
}