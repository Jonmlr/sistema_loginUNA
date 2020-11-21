<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-show-{{$us->slug}}">
	<div class="modal-dialog">
		<div class="modal-content">
        
        
			<div class="modal-header">
                            <h2 class="modal-title">Información completa del Usuario</h2>
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
                                                  
                                                  
                                                    @foreach ($lugar as $lu)
                                                        @if($us->lugar_id == $lu->id)
                                                            <h6 class="card-title">Unidad administrativa: {{$lu->nombre}}
                                                        @endif
                                                    @endforeach  
                                                    
                                                                        
                                                    <h6 class="card-title">Rol: 
                                                    @foreach ($role_user as $roleuse)
                                                        @if($us->useid == $roleuse->user_id) 
                                                                                            
                                                            @foreach ($roles as $rol)
                                                                                            
                                                                @if ($rol->id == $roleuse->role_id)                                       	
                                                                    {{$rol->name}}
                                                                @endif
                                                                                                    
                                                                                                   
                                                            @endforeach
                                                        @endif   
                                                    @endforeach
                                                    
                                                  
                                                  
                                                    <h6 class="card-title">Nombre: {{$us->usuname}}</h6>
                                                    <h6 class="card-title">Apellido: {{$us->usulast}}</h6>
                                                    <h6 class="card-title">Cédula: {{$us->cedula}}</h6>
                                                    <h6 class="card-title">Correo electrónico: {{$us->email}}</h6>
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