<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-edital-{{$lu->slug}}">
	<div class="modal-dialog">
		<div class="modal-content">
        
        
			<div class="modal-header">
                            <h2 class="modal-title">Edición de la Unidad Administrativa</h2>
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
                                                
                                                {!! Form::model($lugar, ['route' => ['lugar.update', $lugar], 'method' => 'PUT']) !!}
                            
                                                @include('lugar.form')
                                                    
                                                    
                                                @include('lugar.updal')
                                                {!! Form::close() !!}
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </body>

                        

             
			</div>
            
            
			<div class="modal-footer">
            <a href="" data-target="#modal-edital-{{$lu->slug}}" data-toggle="modal">
            <button type="submit" class="btn btn-sm btn-primary">Actualizar</button> </a>
				<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>

</div>