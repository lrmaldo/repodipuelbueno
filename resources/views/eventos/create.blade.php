
@extends('layouts.dashboardIndex')
	@section('content')


               <div class="text-center">
               <h2>
               Crear un evento
               </h2>
              
               </div>
               

               <!--form class="form-horizontal needs-validation" novalidate role="form" method="PuT" action="{{ url('/usuario/store') }}"-->
      <form class="form-horizontal needs-validation" novalidate role="form" method="POST" action="{{ url('/eventos/store') }}"  enctype="multipart/form-data">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <input type="hidden" name="_method" value="POST">

              <div class="form-group">
                <label class="col-md-4 control-label">Titulo</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="nombre" placeholder="Titulo del evento"  value="" required>
                      <div class="valid-feedback">
                                  !Bien hecho!
                      </div>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Cargar una imagen en formato .jpg o .png </label>
                <div class="col-md-8">
                  <input type="file" class="form-control" name="imagen_nombre" placeholder="Cargar imagen"  required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-6 control-label">Fecha</label>
                <div class="col-md-8">
                  
                  
                <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy HH:ii p" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                   <input type="text" class="form-control" name="fecha" required>
                    <span class="add-on"><i class="icon-remove"></i></span>
					          <span class="add-on"><i class="icon-th"></i></span>
                </div>
				          <input type="hidden" id="dtp_input2" value="" /><br/>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">Descripción</label>
                <div class="col-md-8">
                  <textarea row="8" type="password" class="form-control" name="descripcion" required> </textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Comentario</label>
                <div class="col-md-8">
                  <textarea row="8" type="password" class="form-control" placeholder="Puedes poner un comentario"  name="descripcion"> </textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                    Crear evento
                  </button>
                </div>
              </div>
			 </form>
    

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


$('.form_date').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });


</script>

@endsection