<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />



@extends('layouts.app') 
  
@section('title', 'Información del Usuario')
<body>  
@section('content')  
  
        <p></p>
    <p>&nbsp;</p>
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-12">
                <div class="card">
                    <div class="card-header bg-dark">
                    
                        <h3>Información del Usuario</h3>
                    
                    </div>
                    
                  <div class="card-body">  	
                                      
                                    @foreach ($lugar as $lu)
                                        @if($user->lugar_id == $lu->id)
                   	<h6 class="card-title">Unidad administrativa: 
                   	{{$lu->nombre}}
                                        @endif
                                    @endforeach                          
               	    <h6 class="card-title">Rol: @foreach ($role_user as $roleuse)
                                    @if($user->id == $roleuse->user_id) 
                                    
                                    	@foreach ($roles as $rol)
                                        
                                        @if ($rol->id == $roleuse->role_id)                                       	
                                        	 {{$rol->name}}
                                        @endif
                                        
                                       
                                        @endforeach
                                      @endif   
                                    @endforeach
                                    
                                                    
                          </h6>
                    <h6 class="card-title">Nombre: {{$user->name}}
                    	  </h6>
                    <h6 class="card-title">Apellido: {{$user->lastname}}
                          </h6>
                    <h6 class="card-title">Cédula: {{$user->cedula}}
                          </h6>
                    <h6 class="card-title">Correo electrónico: {{$user->email}}                            </h6>
                    <h6 class="card-title"><a href="/user" class="btn btn-sm btn-success">Volver</a>                          </h6>
                  </div>                       
       		  </div>
          </div>
      </div>
</div>
    </div>
</body>
@endsection
