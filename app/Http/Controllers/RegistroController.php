<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\inscripciones;
use Mail;
use Illuminate\Http\Request;


class RegistroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return	view('inscripciones.felicidades');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		 
		inscripciones::create([
			'nombre' => $request->input('nombre'),
			'direccion' => $request->input('direccion'),
			'cp' =>$request->input('cp'),
			'municipio' =>$request->input('municipio'),
			'num_celular'=> $request->input('celular'),
			'email'=> $request->input('email'),
			'edad' =>$request->input('edad'),
			'sexo'=> $request->input('sexo'),
			'instituto'=>$request->input('instituto'),
			'id_evento'=>'1',
		]);
		
		$data = $request->input('email');
		

		$subject = "Asunto del correo";
        $for = $data;
        Mail::send('emails.registroMail',$request->all(), function($msj) use($subject,$for){
            $msj->from("leodeveloper93@gmail.com","Soporte Sattlink");
            $msj->subject($subject);
            $msj->to($for);
        });
			
		/**Mail::send('emails.registroMail',$request->all(),function($msj){
				$msj->subject("Te has inscrito al proximo evento");
				$msj->to( "lrmaldo@gmail.com");
		});
		**/
			//$registro = $request->all();
			
		/**Mail::send('emails.registroMail', ['registro' => $registro], function ($m) use ($registro) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($name, "s")->subject('¡Te has inscrito con exito!');
		});**/
		$n = $request->input('nombre');
		$datos =array('nombre' => $n); 
		 return view('inscripciones.felicidades',$datos);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function registroexitoso()
	{
		
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
