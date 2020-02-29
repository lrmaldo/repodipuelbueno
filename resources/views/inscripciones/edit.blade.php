@extends('layouts.dashboardIndex')
  @section('content')
  <div class="container-fluid">

  <h1 class="mt-4">Actualizar</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Actualizar</li>
                        </ol>


                        
      <form class="form-horizontal" role="form" method="post" action="{{ route('dashboard.update', $registro->id) }}">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                      Actualizar
                    </button>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal"> <i class="far fa-trash-alt"></i>
                                                        Eliminar
                                                        </button>
                  </div>
                </div>
                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">asistio</label>
                  </div>
                  <div class="col-md-8">
                  <select name="asistio" class="form-control"  >
                      <option  >{{ $registro->asistio }}</option>
                      @if($registro->asistio ==0)
                      <option >1</option>
                      @endif
                      @if($registro->asistio==1)
                      <option>0</option>
                      @endif
                      
                  </select>
                  </div>
                </div>
                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Nombre Completo:*</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="nombre" value="{{ $registro->nombre }}" placeholder="Nombre completo" >
                  </div>
                </div>

                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Dirección Completa:*</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="direccion" placeholder="Calle o Av, Número"  value="{{ $registro->direccion }}" >
                  </div>
                </div>  
                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">CP:*</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="cp" placeholder="Código Postal" id="cpNumber" value= "{{ $registro->cp }}" >
                  </div>
                </div>

                


                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Municipio:*</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="municipio" placeholder="Ejem. San Juan Bautista Tuxtepec" value="{{ $registro->municipio }}" >
                  </div>
                </div>

                


                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Número de celular:*</label>
                  </div>
                  
                  <div class="col-md-8">
                    <input type="phone" class="form-control" id="phoneNumber" name="celular" placeholder="10 digitos" value="{{ $registro->num_celular }}" >
                  </div>
                </div>


                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Email:*</label>
                  </div>
                  
                  <div class="col-md-8">
                    <input type="email" class="form-control" name="email" placeholder="ejemplo@correo.com" value="{{ $registro->email }}" >
                  </div>
                </div>
                            


              


                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Edad:*</label>
                  </div>
                  <div class="col-md-8">
                    <input type="number" min="15" max="100"  class="form-control" name="edad" value="{{ $registro->edad }}"  >
                  </div>
                </div>


                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Sexo:*</label>
                  </div>
                  <div class="col-md-8">
                      
                  <select name="sexo" class="form-control"  >
                      <option selected >{{ $registro->sexo }}</option>
                      @if($registro->sexo =="Femenino")
                      <option >Masculino</option>
                      @endif
                      @if($registro->sexo=="Masculino")
                      <option>Femenino</option>
                      @endif
                      
                  </select>
                  </div>
                </div>
              
                
                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Dependencia o institución educativa:*</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="instituto" placeholder="Dependencia o Institución educativa" value="{{ $registro->instituto }}"  >
                  </div>
                </div>



              
              </form>

  </div>


   <!-- Modal -->
   <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Esta seguro que desea eliminar este usuario?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                                <form class="form-horizontal" role="form" method="post" action="{{ url('/dashboard/destroy/' . $registro->id ) }}">
                                                                                <input type="hidden" name="_method" value="DELETE">
                                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                <input class="btn btn-danger btn-xs" type="submit" value="Delete" />
                                                                            
                                                                            </form>
                                                                                
                                                                                
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        </div>

@endsection