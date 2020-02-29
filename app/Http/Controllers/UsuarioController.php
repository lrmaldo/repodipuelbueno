<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Session;

use Illuminate\Http\Request;

class UsuarioController extends Controller {




	public function __construct(){
		$this->middleware('auth',['only'=>'index','create','store','edit','update','destroy']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = \App\User::All();
		return view('usuario.index',compact('users'));
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		\App\User::create([
			'name'=> $request->input('name'),
			'email'=>$request->input('email'),
			'password'=>bcrypt($request->input('password')),
		]);
		Session::flash('message','Usuario registrado correctamente');
		return redirect('/usuario')->with('message',"store");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
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
		$user = \App\User::find($id);
		return view('usuario.edit',['user' => $user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request )
	{
		
		
		$user =	\App\User::find($id);
		$user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
		
		//$user->fill($request-> all());
		$user->save();
		
		return  Redirect::to('/usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\App\User::destroy($id);
		return  Redirect::to('/usuario');
	}


	public function login(){
		return view('auth/login');
	}

}
