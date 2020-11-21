<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-show-{{$lu->slug}}">
	<div class="modal-dialog">
		<div class="modal-content">
        
        
			<div class="modal-header">
                            <h2 class="modal-title">Información de la Unidad Administrativa</h2>
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
			</div>
            
			<div class="modal-body">
            
            
                        <body>  
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-md-offset-12">
                                        <div class="card">
                                            <div class="card-header">
                                            
                                                  <div class="card-body"> 
                                                 
                                                    <h6 class="card-title">Nombre: {{$lu->nombre}}</h6>
                                                    <h6 class="card-title">Dirección: {{$lu->direccion}}</h6>
                                                    <h6 class="card-title">Descripción: {{$lu->descripcion}}</h6>
                                                    <h6 class="card-title">Teléfono: {{$lu->telefono}}</h6>
                                                    
                                                  </div>     
                                                                    
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </body>

             
			</div>
            
            
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>

</div>