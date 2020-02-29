<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Excel;
use Redirect;

class DashboardController extends Controller {



	
	public function __construct(){
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$no_asistio  = \App\inscripciones::where('asistio', '<=', '0')->get();
		$contador_noasistio = $no_asistio->count();

		$asistio = \App\inscripciones::where('asistio', '<=', '1')->get();
		$contador_asistio = $asistio->count();
		$total_asis = ($contador_asistio - $contador_noasistio);
	
	
	
	
		$registros = \App\inscripciones::All();
		$total_registros = $registros->count();



		$user = \App\User::All();
		
		return view('dashboard.index',compact('registros','contador_noasistio','total_asis','total_registros'));
		//return view('dashboard.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function graficas()
	{
		///consulta de generos
		$femenino = \App\inscripciones::where('sexo', '<=', 'fenemino')->count();
		$masculino = \App\inscripciones::where('sexo', '=', 'masculino')->count();
		$registros = \App\inscripciones::All();

		//consultas de edades
		$edad18_24 = \App\inscripciones::whereBetween('edad', [18, 24])->count();
		$edad25_30 = \App\inscripciones::whereBetween('edad', [25, 30])->count();
		$edad31_40 = \App\inscripciones::whereBetween('edad', [31, 40])->count();
		$edad41_60 = \App\inscripciones::whereBetween('edad', [41, 60])->count();
		$edad61_70 = \App\inscripciones::whereBetween('edad', [61, 70])->count();
		$edad71_80 = \App\inscripciones::whereBetween('edad', [71, 80])->count();

		

		return view('dashboard.graficas',compact('femenino','masculino','edad18_24','edad25_30','edad31_40','edad41_60','edad61_70','edad71_80'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($type)
	{
		$data = \App\inscripciones::get()->toArray();
            
        return Excel::create('registrosdb-'.date("d-m-Y h:i:sa"), function($excel) use ($data) {
            $excel->sheet('registros', function($sheet) use ($data)
            {
				$sheet->fromArray($data);
				$sheet->setOrientation('landscape');
            });
        })->download($type);
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
		$registros = \App\inscripciones::find($id);
		return view('inscripciones.edit',['registro' => $registros]);
		
		
		
	}

	/**
	 * Update the specified resource in storage.
	 * actualizar asistencia del usuario 0 no asistio y 1 asistio
	 * se usa este controlador para poder usarlo desde el dashboard 
	 * espero no sea confuso 
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id ,Request $request)
	{
		$registro = \App\inscripciones::find($id);
		$registro->nombre = $request->nombre;
		$registro->direccion =$request->direccion;
		$registro->cp =$request->cp;
		$registro->num_celular =$request->celular;
		$registro->email =$request->email;
		$registro->edad =$request->edad;
		$registro->sexo =$request->sexo;
		$registro->instituto =$request->instituto;
		$registro->asistio = $request->asistio;



		$registro->save();
		return  Redirect::to('/dashboard');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\App\inscripciones::destroy($id);
		return  Redirect::to('/dashboard');
		//return $id;
	}

	public function login(){
		return view('auth/login');
	}

}
