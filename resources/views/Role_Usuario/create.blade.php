<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 

@section('title', 'Asignación de roles')

@section('content')

@include('common.errors')


<p> 
      {!! Form::open(['route' => 'role_usuario.store', 'method' => 'POST']) !!}
      
      @include('role_usuario.form')
      
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}</p>
    <p><a href="/role_usuario" class="btn btn-sm btn-primary">Atrás</a>
    </p>
    <p>&nbsp;</p>


    {!! Form::close() !!}
    
@endsection

