<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.icon-large.mins.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Roles')
  
@section('content')
  
@include('common.success')
  
        <p></p>
    <p>&nbsp;</p>
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-12">
                <div class="card">
                
                    <div class="card-header bg-dark">
                    <div class="d-flex justify-content-between align-items-end">
                        
                                
                                <button type="button" class="btn btn-circle-lg btn-warning">
                                                     <i class="fa fa-list">Total: {{$role->total()}}</i> 
                                              </button>
                        </h3>
                        </div>
                    </div>
                    @include('role.search')

    
                        <div class="panel-body">
                        
                        	<table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th width="100px">ID</th>
                                        <th width="100px">Nombre</th>
                                        <th colspan="3"><div align="center">Opciones</div></th>
                                    </tr>
                                </thead>
                                
                            <tbody>    
                                
                   				@foreach ($role as $rol)
                                    <tr>
                         
                                          <td>{{ $rol->id }}</td> 
                                          <td>{{ $rol->rolname }}</td>
                                          
                                          <td width="100">
                                            <div align="center">
                                            @can('role.show')
                                             <a href="{{ route('role.show', $rol->id) }}" class="btn btn-sm btn-primary">Ver</a>
                                            @endcan
                                            </div>
                                         </td>
                                          
                                        
                                        <td width="100">
                                            <div align="center">
                                            @can('role.edit')
                                                <a href="{{ route('role.edit', $rol->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                                @endcan
                                            </div>
                                         </td>
                        
                             
                    
                                        <td width="100">
                                            <div align="center">
                                            @can('role.destroy')
                                                <a href="" data-target="#modal-delete-{{$rol->id}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-danger">Eliminar</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                      
                                       
                        			</tr>
                                    @include('role.modal')
                                @endforeach 
                     </tbody> 
              </table>
            {{$role->render()}}
                        
                        	
                        
                        </div> 
                        
                         
                </div>
            </div>
        </div>
    </div>

@endsection