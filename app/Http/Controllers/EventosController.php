<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\eventos;
use Carbon;

use Illuminate\Http\Request;

class EventosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	 return view('eventos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		
		//$datetime = new  date_format($request->input('fecha'),"YYYY-MM-DD HH:MM");

		$date = Carbon\Carbon::parse($request->input('fecha'))->format('d-m-Y h:i');
	//	$date = Carbon\Carbon::createFromFormat('d-m-Y h:i',"");
	/**eventos::create([
		'nombre'=> $request()->input('nombre'),
		'url_imagen'=> 'img/eventos/',
		'descripcion'=> $request()->input('descripcion'),
		'fecha_evento'=> $request()->input('fecha'),
		'comentario'=> $request()->input('comentario'),
	]);*/
	//eventos::create($request->all());
	return $request->all()."------".$date;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
