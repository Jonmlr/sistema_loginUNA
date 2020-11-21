<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Asignación de Asignaciones')
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
                    
                        <h3>Edición de Asignaciones</h3>
                    
                    </div>
    
    
    
                        <div class="card-body">
                        
                           {!! Form::model($asignado, ['route' => ['asignado.update', $asignado], 'method' => 'PUT']) !!}
    
                            @include('asignado.form')
                            
                            @include('asignado.updal')
                            
        
                                <a href="" data-target="#modal-edit-{{$asignado->id}}" data-toggle="modal">
                                    <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                </a>    
                                    
          						<a href="/asignado" class="btn btn-sm btn-success">Volver</a>
                {!! Form::close() !!}
                
                			
                                
                        </div>
                        
                        
                        
              		</div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

    