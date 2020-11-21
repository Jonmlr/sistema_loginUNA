<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-show-{{$equi->slug}}">
	<div class="modal-dialog">
		<div class="modal-content">
        
        
			<div class="modal-header">
                            <h2 class="modal-title">Información del Equipo</h2>
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
                                                  
                                         <h6 class="card-title">Código UNA: {{$equi->codigou}}</h6>

                                                  
                                                  @foreach ($tipoequipo as $tip)
                                                    @if($equi->tiposequipos_id == $tip->id)
                                                        <h6 class="card-title">Tipo de Equipo: {{$tip->nombre}}</h6>
                                                    @endif
                                    			  @endforeach
                                                  
                                                  @foreach ($marcaequipo as $marc)
                                                    @if($equi->marcasequipos_id == $marc->id)
                                                        <h6 class="card-title">Marca de Equipo: {{$marc->nombre}}</h6>
                                                    @endif	
                                    			  @endforeach
                                                  
                                        <h6 class="card-title">Serial Físico: {{$equi->serial}}</h6>

                                                  
                                    @foreach ($lugar as $lu)
                                        @if($equi->lugar_id == $lu->id)
                                        	<h6 class="card-title">Unidad administrativa: {{$lu->nombre}}</h6>
                                        @endif
                                    @endforeach
                                                 
                                                    <h6 class="card-title">Estado: {{$equi->estado}}</h6>
                                                    <h6 class="card-title">Descripción: {{$equi->descripcion}}</h6>
                                                    <h6 class="card-title">Observaciones: {{$equi->observaciones}}</h6>
                                                    
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