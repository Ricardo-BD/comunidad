@extends('layouts.app2')

@section('content')
		
                <!-- Begin Page Content -->
                <div class="container-fluid">     
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ciudadanos</h1>
                       <a type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{route('ciudadanos.pdf')}}"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Cargo</th>
                                            <th>Barrio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                	@foreach ($ciudadanos as $ciudadano)
                                    
                                    <tbody>
                                        <tr>
                                            <td id="nombre" name="nombre">{{$ciudadano->nombre}}</td>
                                            <td id="apellidoP" name="apellidoP">{{$ciudadano->apellidoP}} {{$ciudadano->apellidoM}}</td>
                                            <td id="apellidoM" name="apellidoM" class="collapse"></td>
                                            <td id="idcargo" name="idcargo">{{App\Cargo::find($ciudadano->idcargo)->nombre}}</td>
                                            <td id="idbarrio" name="idbarrio">{{App\Barrio::find($ciudadano->idbarrio)->nombre}}</td>
                                            <td class="d-flex">
                                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModal3Label">Asignar actividad</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										    
							

                                <form method="POST" action="{{ route('ciudadanos.update', $ciudadano->id) }}"  role="form">
                                        {{method_field('PUT')}}
                                        {{ csrf_field() }}
													

						                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						                           
						                            <div class="col-md-6">
                                                        <input id="nombre" type="text" class="collapse" name="nombre" value="{{ $ciudadano->nombre}}" required autofocus>

                                                        <input id="apellidoP" type="text" class="collapse" name="apellidoP" value="{{ $ciudadano->apellidoP}}" required autofocus>

                                                        <input id="apellidoM" type="text" class="collapse" name="apellidoM" value="{{ $ciudadano->apellidoM}}" required autofocus>

                                                        <input id="idcargo" type="text" class="collapse" name="idcargo" value="{{ $ciudadano->idcargo}}" required autofocus>

                                                        <input id="idbarrio" type="text" class="collapse" name="idbarrio" value="{{ $ciudadano->idbarrio}}" required autofocus>

                                                        <input id="estatus" type="text" class="collapse" name="estatus" class="collapse" value="No Pagada">

                                                        

                                                        <label for="nombre" class="col-md-8 control-label">Actividad</label>
                                                     
                                                        <select id="idactividad" type="number" class="form-control" name="idactividad" required autofocus>
                                                           
                                                        @foreach ($actividades as $actividad)
                                                        
                                                        <option value="{{$actividad->id}}">{{$actividad->nombre}}</option>
                                                      
                                                         
                                                        @endforeach
                                                        </select>
                                                       
                                                        
                                                    </div>
						                        </div>
						                   
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
										        <button type="submit" class="btn btn-primary">Asignar</button>
										
                                        </form>
								      

                                      </div>
								    </div>
								  </div>
								</div>

                                                <a type="button" data-toggle="modal" data-target="#exampleModal3" class="btn btn-success btn-circle" style="    margin: 0em 0.2em 0em 0.2em;">
                                                    <i class="fas fa-plus"></i> 
                                                </a>

                                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal1Label">Editar ciudadano</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                            
                                            <form method="POST" action="{{ route('ciudadanos.update', $ciudadano->id) }}"  role="form">
                                                {{method_field('PUT')}}
                                                {{ csrf_field() }}
                                                    
                                                    <input id="estatus" type="text" class="form-control" name="estatus" class="collapse" value="No Pagada">
                                                    
                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="nombre" class="col-md-4 control-label">Nombre</label>

                                                    <div class="col-md-6">
                                                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $ciudadano->nombre}}" required autofocus>

                                                        <input id="apellidoP" type="text" class="form-control" name="apellidoP" value="{{ $ciudadano->apellidoP}}" required autofocus>

                                                        <input id="apellidoM" type="text" class="form-control" name="apellidoM" value="{{ $ciudadano->apellidoM}}" required autofocus>

                                                        <select id="idcargo" type="text" class="form-control" name="idcargo" value="{{App\Cargo::find($ciudadano->idcargo)->nombre}}" required autofocus>
                                                            
                                                        @foreach ($cargos as $cargo)
                                                        <option value="{{$cargo->id}}">{{$cargo->nombre}}</option>
                                                         
                                                        @endforeach
                                                        </select>

                                                        <select id="idbarrio" type="text" class="form-control" name="idbarrio" value="{{App\Barrio::find($ciudadano->idbarrio)->nombre}}" required autofocus>
                                                        @foreach ($barrios as $barrio)
                                                        <option value="{{$barrio->id}}">{{$barrio->nombre}}</option>
                                                         
                                                        @endforeach

                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                           
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                                 </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>        

                                                 <a type="button" href="{{ route('certificados.pdf', $ciudadano->id) }}" class="btn btn-primary btn-circle" style="    margin: 0em 0.2em 0em 0.2em;">
                                                    <i class="fas fa-download"></i> 
                                                </a>

                                            	<a type="button" data-toggle="modal" data-target="#exampleModal1" class="btn btn-warning btn-circle" style="    margin: 0em 0.2em 0em 0.2em;">
			                                        <i class="fas fa-edit"></i> 
			                                    </a>

                                               



			                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModal2Label">Eliminar ciudadano</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										    
										    <form action="{{route('ciudadanos.destroy', $ciudadano->id)}}" method="post">
								                   {{csrf_field()}}
								                   <input name="_method" type="hidden" value="DELETE">
													
                                                   
						                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

						                            <div class="col-md-8">
						                            	<p>Seguro que desea eliminar este ciudadano?</p>
						                               
						                            </div>
						                        </div>
						                   
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
										        <button type="submit" class="btn btn-primary">Eliminar</button>
										         </form>
										      </div>
										    </div>
										  </div>
										</div>
                                            	
								 
								                   <a type="button" data-toggle="modal" data-target="#exampleModal2"class="btn btn-danger btn-circle" style="    margin: 0em 0.2em 0em 0.2em;">
								                   	
			                                        <i class="fas fa-trash"></i>
			                                    </button>
			                                
			                                    </a>
			                                </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                 
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

@endsection