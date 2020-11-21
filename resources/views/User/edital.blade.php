<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-edit-{{$us->slug}}">
	<div class="modal-dialog">
		<div class="modal-content">
        
        
			<div class="modal-header">
                            <h2 class="modal-title">Edición del Usuario</h2>
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
			</div>
            
			<div class="modal-body">
            
            		<body>  
  
                        @include('common.errors')
                          
                              
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-md-offset-12">
                                        <div class="card">
                                            <div class="card-header">
                                            
                                            
                            
                            
                            
                                                <div class="card-body">
                                                
                                                {!! Form::model($user, ['route' => ['user.update', $user], 'method' => 'PUT']) !!}
                            
                                                @include('user.form')
                                                    
                                                    
                                                @include('user.updal')
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </body>

                        

             
			</div>
            
            
			<div class="modal-footer">
            <a href="" data-target="#modal-edit-{{$us->slug}}" data-toggle="modal">
            <button type="submit" class="btn btn-sm btn-primary">Actualizar</button> </a>
				<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>

</div>