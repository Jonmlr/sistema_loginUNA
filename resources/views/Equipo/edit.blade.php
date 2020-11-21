<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Edición de Equipos')
  <body>
@section('content')
  
@include('common.errors')
  
        <p></p>
    <p>&nbsp;</p>
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-12">
                <div class="card">
                    <div class="card-header bg-dark">
                    
                        <h3>Edición de Equipos</h3>
                    
                    </div>
    
    
    
                        <div class="card-body">
                        
                           {!! Form::model($equipo, ['route' => ['equipo.update', $equipo], 'method' => 'PUT']) !!}
    
                            @include('equipo.form')
                            
                            @include('equipo.updal')
        
                                <a href="" data-target="#modal-edit-{{$equipo->slug}}" data-toggle="modal">
                                    <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                </a>    
                                    
          						<a href="/equipo" class="btn btn-sm btn-success">Volver</a>
                {!! Form::close() !!}
                
                			
                                
                        </div>
                        
                        
                        
              		</div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
