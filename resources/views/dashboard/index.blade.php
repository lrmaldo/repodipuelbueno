
@extends('layouts.dashboardIndex')
  @section('content')
  
  <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total de usuarios registrados </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
</div>
		
  <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

<h2>Registros</h2>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Direccion</th>
                                                <th>CP</th>
                                                <th>municipio</th>
                                                <th>Número</th>
                                                <th>Email</th>
                                                <th>Edad</th>
                                                <th>Sexo</th>
                                                <th>Instituto</th>
                                                <th>Asistio</th>

                                                
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
                                        </tboby>
                                        </table>
</div>
</main>
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
type: 'line',
data: {
labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
datasets: [{
  data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
  lineTension: 0,
  backgroundColor: 'transparent',
  borderColor: '#007bff',
  borderWidth: 4,
  pointBackgroundColor: '#007bff'
}]
},
options: {
scales: {
  yAxes: [{
    ticks: {
      beginAtZero: false
    }
  }]
},
legend: {
  display: false,
}
}
});
</script>







	@endsection