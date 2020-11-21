<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Asignación de roles')
  
@section('content')
  
@include('common.success')
  
    <p>
    
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Roles Asignados <a href="role_usuario/create">
            <button class="btn btn-sm btn-success">Asignar</button></a></h3>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr bgcolor="#343A40">
                            <th width="1">ID</th>
                            <th width="117">Usuario</th>
                            <th width="200">Rol</th>
                            <th colspan="3"><div align="center">Opciones</div></th>
                        </tr>
                    </thead>
                   @foreach ($role_usuario as $ru)
                        <tr>
                        
                          <td>{{ $ru->id }}</td>
                          
                          @foreach($user as $us)
                          @if($ru->user_id == $us->id)
                          <td>{{ $us->name }}</td>
                          @endif
                          @endforeach

       
                          @foreach($role as $rol)
                          @if($ru->role_id == $rol->id)
                          <td>{{ $rol->nombre }}</td>
                          @endif
                          @endforeach
                            
        
                            <td width="36">
                                <div align="center">
                                    <a href="{{ route('role_usuario.edit', $ru->slug) }}" class="btn btn-sm btn-primary">Editar</a>
                                </div>
                             </td>
                             
                            <td width="68">
                                <div align="center">
                                    <a href="" data-target="#modal-delete-{{$ru->slug}}" data-toggle="modal">
                                        <button class="btn btn-sm btn-danger">Eliminar</button></a>
                                </div>
                            </td>
                                       
                        </tr>
                        
                        @include('role_usuario.modal')
                    @endforeach  
              </table>
            </div>
            {{$role_usuario->render()}}
        </div>
    </div>
 
@endsection

