<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Información de la Asignación')
 <body> 
@section('content')  
  
        <p></p>
    <p>&nbsp;</p>
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-12">
                <div class="card">
                    <div class="card-header bg-dark">
                    
                        <h3>Información de la Asignación</h3>
                    
                    </div>
                    
                        <div class="card-body">  	
                                      
                                    @foreach ($equipos as $equi)
                                        @if($asignado->equipos_id == $equi->id)
                                        	<h6 class="card-title">Equipo (Código UNA): {{$equi->codigou}}</h6>
                                        @endif
                                    @endforeach
                                    
                                    @foreach ($user as $us)
                                        @if($asignado->user_id == $us->id)
                                        	<h6 class="card-title">Usuario asignado: {{$us->name}} {{$us->lastname}}</h6>
                                        @endif
                                    @endforeach
                                    
                                    
                                    @foreach ($equipos as $equi)
                                        @if ($equi->id == $asignado->id)
                                            @foreach ($tipoequipo as $tip)
                                                @if ($tip->id == $equi->tiposequipos_id)                                       	
                                                    <h6 class="card-title">Tipo Equipo: {{$tip->nombre}}</h6>
                                                @endif
                                            @endforeach
                                       @endif
                                    @endforeach
                                    

                                    
                                <a href="/asignado" class="btn btn-sm btn-success">Volver</a>
                                
                        </div>                       
              		</div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection