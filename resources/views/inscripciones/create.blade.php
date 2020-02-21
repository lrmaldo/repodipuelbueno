@extends('layouts.principal')

@section('content')
<form class="form-signin" role="form" method="POST" action="{{ url('/usuario/store') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">fecha de nacimiento </label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-6 control-label">email</label>
							<div class="col-md-8">
								<input type="email" class="form-control" name="email">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Número de celular</label>
							<div class="col-md-8">
								<input type="number" class="form-control" name="celular">
							</div>
						</div>
                        <div class="form-group">
							<label class="col-md-4 control-label">Número de celular</label>
							<div class="col-md-8">
								<input type="number" class="form-control" name="celular">
							</div>
						</div>  
                        <div class="form-group">
							<label class="col-md-4 control-label">Institulo</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="institulo">
							</div>
						</div>
                        <div class="form-group">
							<label class="col-md-4 control-label">Localidad</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="localidad">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Registrar
								</button>
							</div>
						</div>
					</form>



@endsection