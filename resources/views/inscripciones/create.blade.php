 
 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="ing Leonardo Maldonado">

  <title>DiME</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900') }}" rel="stylesheet">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href=" {{ asset('css/one-page-wonder.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('css/eventos.css') }}" rel="stylesheet">
  <link href=" {{ asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
    <div class="container">
      <a class="navbar-brand" href="/">DiME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contacto') }}">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('inscripciones/create') }}">Eventos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registro</h3>
				
			</div>
			<div class="card-body">
			<form  role="form" method="POST" action="{{ url('/usuario/store') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
						<div class="input-group-prepend">
							<label class="col-md-4 control-label">Nombre Completo</label>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
						<div class="input-group-prepend">
							<label class="col-md-4 control-label">Fecha de nacimiento</label>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
						<div class="input-group-prepend">
							<label class="col-md-4 control-label">Email</label>
							</div>
							
							<div class="col-md-8">
								<input type="email" class="form-control" name="email">
							</div>
						</div>

						<div class="form-group">
						<div class="input-group-prepend">
							<label class="col-md-4 control-label">Número de celular</label>
							</div>
							
							<div class="col-md-8">
								<input type="phone" class="form-control" name="celular">
							</div>
						</div>
                        <div class="form-group">
						<div class="input-group-prepend">
							<label class="col-md-4 control-label">Dirección</label>
							</div>
							<div class="col-md-8">
								<input type="number" class="form-control" name="Direccion">
							</div>
						</div>  
                        <div class="form-group">
						<div class="input-group-prepend">
							<label class="col-md-4 control-label">Municipio</label>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" name="municipio">
							</div>
						</div>
                        <div class="form-group">
						<div class="input-group-prepend">
							<label class="col-md-4 control-label">Colonia</label>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" name="colonia">
							</div>
						</div>
						<div class="form-group">
						<div class="input-group-prepend">
							<label class="col-md-4 control-label">Sexo</label>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" name="sexo">
							</div>
						</div>
						<div class="form-group">
						<div class="input-group-prepend">
							<label class="col-md-4 control-label">Edad</label>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" name="edad">
							</div>
						</div>
						<div class="form-group">
						<div class="input-group-prepend">
							<label class="col-md-4 control-label">Institulo Educativo</label>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" name="instituto">
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

			</div>
			
		</div>
	</div>
</div>















</body>

</html>
