@extends('layouts.app') 

@section('title', 'Creación de Movimiento de Equipos')

@section('content')

	@include('common.errors')


<p> 
      {!! Form::open(['route' => 'movimientoequipo.store', 'method' => 'POST']) !!}
      
      @include('movimientoequipo.form')
      
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}</p>
    <p><a href="/movimientoequipo" class="btn btn-sm btn-primary">Atrás</a>
    </p>
    <p>&nbsp;</p>


    {!! Form::close() !!}

@endsection

