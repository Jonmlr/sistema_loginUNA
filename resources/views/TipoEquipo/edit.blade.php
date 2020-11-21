<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Edición de Tipo de Equipos')
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
                    
                        <h3>Edición de Tipo de Equipos</h3>
                    
                    </div>
    
    
    
                        <div class="card-body">
                        
                           {!! Form::model($tipoequipo, ['route' => ['tipoequipo.update', $tipoequipo], 'method' => 'PUT']) !!}
    
                            @include('tipoequipo.form')
                            @include('tipoequipo.updal')
                            
        
                                <a href="" data-target="#modal-edit-{{$tipoequipo->slug}}" data-toggle="modal">
                                    <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                </a>    
                                    
          						<a href="/tipoequipo" class="btn btn-sm btn-success">Volver</a>
                {!! Form::close() !!}
                
                			
                                
                        </div>
                        
                        
                        
              		</div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

