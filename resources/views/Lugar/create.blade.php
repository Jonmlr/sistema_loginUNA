<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Creación de Unidades Administrativas')
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
                    
                        <h3>Creación de Unidades Administrativas</h3>
                    
                    </div>
    
    
    
                        <div class="card-body">
                        
                                  {!! Form::open(['route' => 'lugar.store', 'method' => 'POST']) !!}
                                  
                                  @include('lugar.form')
                                  
                                    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!} 
                                    <a href="/lugar" class="btn btn-sm btn-success">Volver</a>
                                	{!! Form::close() !!}
                                
                        </div>
                        
                        
                        
              		</div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
