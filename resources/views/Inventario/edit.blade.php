<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 

@section('title', 'Edición de Inventarios')

@section('content')

<p>    

	{!! Form::model($inventario, ['route' => ['inventario.update', $inventario], 'method' => 'PUT']) !!}
    
        	@include('inventario.form')
            
       		@include('inventario.updal')
        
    				<a href="" data-target="#modal-edit-{{$inventario->slug}}" data-toggle="modal">
                        <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                    </a>      
    
<p>    
    <p><a href="/inventario" class="btn btn-sm btn-primary">Atrás</a>   

	{!! Form::close() !!}

@endsection

    