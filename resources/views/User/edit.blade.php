<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Edición de Usuarios')
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
                    
                        <h3>Edición de Usuarios</h3>
                    
                    </div>
    
    
    
                        <div class="card-body">
                        
                           {!! Form::model($user, ['route' => ['user.update', $user], 'method' => 'PUT']) !!}
    
                            @include('user.form')
                            
                            
                            @include('user.updal')
                            
        
                                <a href="" data-target="#modal-edit-{{$user->slug}}" data-toggle="modal">
                                    <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                </a>    
                                    
          						<a href="/user" class="btn btn-sm btn-success">Volver</a>
                {!! Form::close() !!}
                
                			
                                
                        </div>
                        
                        
                        
              		</div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
