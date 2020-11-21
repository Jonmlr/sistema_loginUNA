<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 

@section('title', 'Asignación de roles')

@section('content')

	<p>    

        {!! Form::model($role_usuario, ['route' => ['role_usuario.update', $role_usuario], 'method' => 'PUT']) !!}
        
                @include('role_usuario.form')
                
                @include('role_usuario.updal')
            
                <a href="" data-target="#modal-edit-{{$role_usuario->slug}}" data-toggle="modal">
                    <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                </a>
        
            <p>    
                <p><a href="/role_usuario" class="btn btn-sm btn-primary">Atrás</a>   
       
        {!! Form::close() !!}

@endsection

    