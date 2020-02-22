<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class eventos extends Model {

	protected $table = 'eventos';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','nombre','url_imagen', 'descripcion','fecha_evento','comentario'];

	public function setPathAttribute($url_imagen){
		$this->attributes['url_imagen'] =Carbon::now()->second.'-'.$url_imagen->getClientOriginalName();
		$nombre = Carbon::now()->second.'-'.$url_imagen->getClientOriginalName();
		\Storage::disk('local')->put($nombre,\File::get($url_imagen));
	}


}
