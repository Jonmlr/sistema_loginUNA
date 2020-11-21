<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-show-{{$asig->id}}">
	<div class="modal-dialog">
		<div class="modal-content">
        
        
			<div class="modal-header">
                            <h2 class="modal-title">Información de la Asignación</h2>
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
                                                 
                                                 
                                    @foreach ($user as $us)
                                        @if($asig->user_id == $us->id)
                                        	<h6 class="card-title">Usuario asignado: {{$us->name}} {{$us->lastname}}</h6>
                                        @endif
                                    @endforeach
                                    
                                                    @foreach ($equipos as $equi)
                                                        @if($asig->equipos_id == $equi->id)
                                                            <h6 class="card-title">Código UNA: {{$equi->codigou}}</h6>
                                                        @endif
                                    			    @endforeach
                                                    
                                    @foreach ($equipos as $equi)
                                        @if ($equi->id == $asig->equipos_id)
                                            @foreach ($tipoequipo as $tip)
                                                @if ($tip->id == $equi->tiposequipos_id)                                       	
                                                    <h6 class="card-title">Tipo Equipo: {{$tip->nombre}}</h6>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                                    
                                    
                                                    
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