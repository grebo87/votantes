<?php

class Votante extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'cedula' => 'unique:votantes,cedula'
	];

	// Don't forget to fill this array
	protected $fillable = ['nombre', 'apellido', 'cedula', 'parroquia','telefono','voto'];
	protected $table='votantes';
	public $timestamps = false;

}