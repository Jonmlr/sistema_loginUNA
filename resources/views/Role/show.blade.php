<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Información del Rol')
<body>  
@section('content')  
  
        <p></p>
    <p>&nbsp;</p>
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-12">
                <div class="card">
                    <div class="card-header bg-dark">
                    
                        <h3>Información del Rol</h3>
                    
                    </div>
                    
                        <div class="card-body">  	
                         
                                    <h6 class="card-title">Nombre: {{$role->name}}</h6>
                                    <h6 class="card-title">Descripción: {{$role->description}}</h6>
                                
                                <a href="/role" class="btn btn-sm btn-success">Volver</a>
                                
                        </div>                       
              		</div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection