<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 

@section('title', 'Creación de Inventarios')

@section('content')

@include('common.errors')


<p> 
      {!! Form::open(['route' => 'inventario.store', 'method' => 'POST']) !!}
      
      @include('inventario.form')
      
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm-8 btn-primary']) !!}</p>
    <p><a href="/inventario" class="btn btn-sm-8 btn-primary">Atrás</a>
    </p>
    <p>&nbsp;</p>


    {!! Form::close() !!}
    
@endsection

