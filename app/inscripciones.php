<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class inscripciones extends Model {

	protected $table = 'inscripciones';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','nombre','fecha_de_nacimiento', 'email', 'num_celular','institulo','localidad','asistio','id_evento'];


}
