<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class inscripciones extends Model {

	protected $table = 'inscripciones';
	public $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','nombre','direccion', 'municipio','num_celular','email','edad','sexo','instituto','asistio','id_evento'];


}
