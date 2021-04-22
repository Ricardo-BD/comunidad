@extends('layouts.app2')

@section('content')
		
                <!-- Begin Page Content -->
                <div class="container-fluid">     
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ciudadanos - Actividades</h1>
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
                                            <th>Actividad</th>
                                            <th>Multa</th>
                                            <th>Estatus</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                	@foreach ($ciudadanos as $ciudadano)
                                @if($ciudadano->idactividad != NULL)
                                    <tbody>
                                        <tr>
                                            <td id="nombre" name="nombre">{{$ciudadano->nombre}}</td>
                                            <td id="apellidoP" name="apellidoP">{{$ciudadano->apellidoP}} {{$ciudadano->apellidoM}}</td>
                                            <td id="apellidoM" name="apellidoM" class="collapse"></td>
                                            <td id="idcargo" name="idcargo">
                                                
                                                  

                                                  {{App\Actividade::find($ciudadano->idactividad)->nombre}}
                                                  
                                                </td>
                                            <td id="idbarrio" name="idbarrio">{{App\Actividade::find($ciudadano->idactividad)->multa}}</td>
                                            
                                            <td id="estatus" name="estatus">{{$ciudadano->estatus}}</td>

                                            <td class="d-flex">
                                        

                                                <a type="button" data-toggle="modal" data-target="#exampleModal1" class="btn btn-success btn-circle" style="    margin: 0em 0.2em 0em 0.2em;">
                                                    <i class="fas fa-check"></i> 
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
                                                    

                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="nombre" class="col-md-4 control-label">Nombre</label>

                                                    <div class="col-md-6">
                                                        <p>Este ciudadano cumplio con la multa?</p>

                                                   
                                                        <input id="nombre" type="text" class="collapse" name="nombre" value="{{ $ciudadano->nombre}}" required autofocus>

                                                        <input id="apellidoP" type="text" class="collapse" name="apellidoP" value="{{ $ciudadano->apellidoP}}" required autofocus>

                                                        <input id="apellidoM" type="text" class="collapse" name="apellidoM" value="{{ $ciudadano->apellidoM}}" required autofocus>

                                                        <input id="idcargo" type="text" class="collapse" name="idcargo" value="{{ $ciudadano->idcargo}}" required autofocus>

                                                        <input id="idbarrio" type="text" class="collapse" name="idbarrio" value="{{ $ciudadano->idbarrio}}" required autofocus>

                                                        <input id="estatus" type="text" class="collapse" name="estatus" class="collapse" value="Pagada">
                                                    </div>
                                                </div>
                                           
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Si</button>
                                                 </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>        


			                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModal2Label">Eliminar actividad a ciudadano</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										    
										    <form action="{{ route('ciudadanos.update', $ciudadano->id) }}" method="post">
                                                {{method_field('PUT')}}
								                   {{csrf_field()}}

								                   <input type="text" name="nombre" id="nombre" class="collapse" value="{{$ciudadano->nombre}}">
												
                                                    <input type="text" name="apellidoP" id="apellidoP" class="collapse" value="{{$ciudadano->apellidoP}}">

                                                    <input type="text" name="apellidoM" id="apellidoM" class="collapse" value="{{$ciudadano->apellidoM}}">  

                                                    <input type="number" name="idcargo" id="idcargo" class="collapse" value="{{$ciudadano->idcargo}}">  

                                                    <input type="number" name="idbarrio" id="idbarrio" class="collapse" value="{{$ciudadano->idbarrio}}">

                                                    <input type="number" name="idactividad" id="idactividad" class="collapse" value="NULL">	

                                                    <input type="text" name="estatus" id="estatus" class="collapse" value="No Pagada">

						                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						                           

						                            <div class="col-md-8">
						                            	<p>Seguro que desea eliminar la actividad para este ciiudadano?</p>
						                               
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
                                    @endif
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