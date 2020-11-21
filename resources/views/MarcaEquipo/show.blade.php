<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Información de la Marca de Equipo')
  <body>
@section('content')  
  
        <p></p>
    <p>&nbsp;</p>
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-12">
                <div class="card">
                    <div class="card-header bg-dark">
                    
                        <h3>Información de la Marca de Equipo</h3>
                    
                    </div>
                    
                        <div class="card-body">  
                                                    
                                    <h6 class="card-title">Nombre: {{$marcaequipo->nombre}}</h6>
                                    <h6 class="card-title">Modelo: {{$marcaequipo->modelo}}</h6>
                                    
                                <a href="/marcaequipo" class="btn btn-sm btn-success">Volver</a>
                                
                        </div>                       
              		</div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection