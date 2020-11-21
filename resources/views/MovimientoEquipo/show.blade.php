@extends('layouts.app') 

@section('title', 'Movimiento de equipo')

@section('content')

		@include('common.success')

    
        <div class="card text-center" style="width: 18rem; margin-top:70px">
              <div class="text-center">
                    <h6 class="card-title">{{$movimientoequipo->nombre}}</h6>
                    <p class="card-text">{{$movimientoequipo->descripcion}}</p>
                    
                    <a href="/movimientoequipo/{{$movimientoequipo->slug}}/edit" class="btn btn-primary">Editar</a>
                    
                    {!! Form::open(['route' => ['movimientoequipo.destroy', $movimientoequipo->slug], 'method' => 'DELETE']) !!}
                    	{!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    
                    <a href="/movimientoequipo" class="btn btn-primary">Atrás</a>
		</div>
@endsection
