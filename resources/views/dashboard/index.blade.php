
@extends('layouts.dashboardIndex')
  @section('content')

		
  <!--canvas class="my-4" id="myChart" width="900" height="380"></canvas-->
  <!--canvas id="myBarChart" width="100%" height="40"></canvas-->
 

  
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Gráfica de asistencia</div>
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                    <div class="card-footer small text-muted"> <div id="demo"></div> </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                   
                                    <div class="card-body">
                                        <h2>Total de registros: {{$total_registros}}</h2>
                                    </div>
                                    <div class="card-footer small text-muted"><div id="fecha2"></div></div>
                                </div>
                            </div>
                            
       
                        </div>
  <script>

  var d = new Date();
document.getElementById("demo").innerHTML = d;
document.getElementById("fecha2").innerHTML =d;
  
    $(document).ready( function () {
    $('dataTable').DataTable();
} );
    </script>

                      <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Registros</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Direccion</th>
                                                <th>CP</th>
                                                <th>Municipio</th>
                                                <th>Número</th>
                                                <th>Email</th>
                                                <th>Edad</th>
                                                <th>Sexo</th>
                                                <th>Instituto</th>
                                                <th>Asistió</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($registros as $registro)
                                            <tr>
                                                <td>{{$registro->id}}</td>
                                                <td>{{$registro->nombre}}</td>
                                                <td>{{$registro->direccion}}</td>
                                                <td>{{$registro->cp}}</td>
                                                <td>{{$registro->municipio}}</td>
                                                <td>{{$registro->num_celular}}</td>
                                                <td>{{$registro->email}}</td>
                                                <td>{{$registro->edad}}</td>
                                                <td>{{$registro->sexo}}</td>
                                                <td>{{$registro->instituto}}</td>
                                                <td>{{$registro->asistio}}</td>
                                                <td> 
                                                <a href="{{ url('/usuario/' . $registro->id . '/edit') }}" class="btn btn-info btn-xs"><i class="fas fa-edit"></i> Editar </a>
                                                
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal"> <i class="far fa-trash-alt"></i>
                                                        Eliminar
                                                        </button>
                                                        </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

           
</main>
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script>window.jQuery || document.write('<script src="/js/jquery-slim.min.js"><\/script>')</script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>



<script>



Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var noasistio = JSON.parse("{{ json_encode($contador_noasistio) }}"); 
var asistio = JSON.parse("{{ json_encode($total_asis) }}");
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Asistió", "No asistio"],
    datasets: [{
      data: [asistio,noasistio],
      backgroundColor: ['#007bff', '#dc3545'],
    }],
  },
});


        </script>







	@endsection