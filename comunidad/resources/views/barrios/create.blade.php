@extends('layouts.app2')

@section('content')

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Agregar barrio</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				    
				    <form class="form-horizontal" method="POST" action="{{ route('barrios.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                   
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				        <button type="submit" class="btn btn-primary">Guardar</button>
				         </form>
				      </div>
				    </div>
				  </div>
				</div>




				
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
	                    <h1 class="h3 mb-2 text-gray-800">Barrios</h1>
	                    <a type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Agregar Barrio</a> 

                    </div>       

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                	@foreach ($barrios as $barrio)
                                    <tbody>
                                        <tr>
                                            <td>{{$barrio->nombre}}</td>
                                            <td class="d-flex">
                                            	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModal1Label">Editar barrio</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										    
										    <form method="POST" action="{{ route('barrios.update', $barrio->id) }}"  role="form">
										    	{{method_field('PUT')}}
												{{ csrf_field() }}
													

						                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

						                            <div class="col-md-6">
						                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $barrio->nombre}}" required autofocus>
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
                                            	<a type="button" data-toggle="modal" data-target="#exampleModal1" class="btn btn-warning btn-circle" style="    margin: 0em 0.2em 0em 0.2em;">
			                                        <i class="fas fa-edit"></i> 
			                                    </a>



			                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModal2Label">Eliminar barrio</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										    
										    <form action="{{route('barrios.destroy', $barrio->id)}}" method="post">
								                   {{csrf_field()}}
								                   <input name="_method" type="hidden" value="DELETE">
													

						                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

						                            <div class="col-md-8">
						                            	<p>Seguro que desea eliminar este barrio?</p>
						                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $barrio->nombre}}" required autofocus readonly>
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