<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Información de la Unidad Administrativa')
  <body>

@section('content')  
  
        <p></p>
    <p>&nbsp;</p>
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-12">
                <div class="card">
                    <div class="card-header bg-dark">
                    
                        <h3>Información de la Unidad Administrativa</h3>
                    
                    </div>
                    
                        <div class="card-body">  	
                                      
                                    <h6 class="card-title">Nombre: {{$lugar->nombre}}</h6>
                                    <h6 class="card-title">Dirección: {{$lugar->direccion}}</h6>
                                    <h6 class="card-title">Descripción: {{$lugar->descripcion}}</h6>
                                    <h6 class="card-title">Teléfono: {{$lugar->telefono}}</h6>
                                
                                <a href="/lugar" class="btn btn-sm btn-success">Volver</a>
                                
                        </div>                       
              		</div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection