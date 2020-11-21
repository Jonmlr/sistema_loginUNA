@extends('layouts.app') 

@section('title', 'Edición de Movimiento de Equipos')

@section('content')

<p> 

	{!! Form::model($movimientoequipo, ['route' => ['movimientoequipo.update', $movimientoequipo], 'method' => 'PUT']) !!}
    
        	@include('movimientoequipo.form')
        
			@include('movimientoequipo.updal')
        
					<a href="" data-target="#modal-edit-{{$movimientoequipo->slug}}" data-toggle="modal">
                        <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                    </a>        
    
<p>    
    <p><a href="/movimientoequipo" class="btn btn-sm btn-primary">Atrás</a>
   
    

	{!! Form::close() !!}
    
@endsection

    