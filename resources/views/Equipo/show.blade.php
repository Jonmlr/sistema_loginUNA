<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Información del Equipo')
  <body>
@section('content')  
  
        <p></p>
    <p>&nbsp;</p>
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-12">
                <div class="card">
                    <div class="card-header bg-dark">
                    
                        <h3>Información del Equipo</h3>
                    
                    </div>
                    
                        <div class="card-body">  	
                                      
                                    @foreach ($tipoequipo as $tip)
                                        @if($equipo->tiposequipos_id == $tip->id)
                                        	<h6 class="card-title">Tipo de Equipo: {{$tip->nombre}}</h6>
                                        @endif
                                    @endforeach
                                    
                                    @foreach ($marcaequipo as $marc)
                                        @if($equipo->marcasequipos_id == $marc->id)
                                        	<h6 class="card-title">Marca de Equipo: {{$marc->nombre}}</h6>
                                        @endif
                                    @endforeach
                                    
                                    @foreach ($lugar as $lu)
                                        @if($equipo->lugar_id == $lu->id)
                                        	<h6 class="card-title">Unidad administrativa a la que pertenece: {{$lu->nombre}}</h6>
                                        @endif
                                    @endforeach
                                                    
                                    <h6 class="card-title">Estado: {{$equipo->estado}}</h6>
                                    <h6 class="card-title">Código UNA: {{$equipo->codigou}}</h6>
                                    <h6 class="card-title">Serial Físico: {{$equipo->serial}}</h6>
                                    <h6 class="card-title">Descripción: {{$equipo->descripcion}}</h6>
                                    <h6 class="card-title">Observaciones: {{$equipo->observaciones}}</h6>
                                
                                <a href="/equipo" class="btn btn-sm btn-success">Volver</a>
                                
                        </div>                       
              		</div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection