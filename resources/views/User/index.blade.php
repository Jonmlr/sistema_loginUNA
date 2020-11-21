<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.icon-large.mins.css') }}" />



@extends('layouts.app') 
  
@section('title', 'Usuarios')
  
@section('content')
@include('common.success')
@include('common.success2')


  
        <p></p>
    <p>&nbsp;</p>
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-12">
                <div class="card">
                
                  <div class="card-header bg-dark">
                  <div class="d-flex justify-content-between align-items-end">
                    <h3 class="pb-1">Usuarios @can('user.create')
                                    <a href="user/create"><button class="btn btn-sm btn-success">Crear</button>
                                    </a>
                                @endcan   
                                		
                                              <h3 class="pb-1">Total creados: <button type="button" class="btn btn-circle-lg btn-warning">
                                                     <i class="fa fa-list">{{$user->total()}}</i> 
                                              </button></h3>
                                				
                    </h3>
                                
                                
                   </div>               
          </div>
                    @include('user.search')

    
                        <div class="panel-body">
                        
                        	<table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th >Nombre</th>
                                        <th >Apellido</th>
                                        <th >Cédula</th>
                                        <th colspan="3"><div align="center">Opciones</div></th>
                                    </tr>
                                </thead>
                                
                            <tbody>    
                                
                   				@foreach ($user as $us)
                                
                                 	@if ($us->useid != '21')
                                    <tr>
                                        <td>{{ $us->usuname }}</td>
                                        <td>{{ $us->usulast }}</td>
                                        <td>{{ $us->cedula }}</td>
                                        
                                        
                                         <td >
                                            <div align="center">
                                            @can('user.show')
                                                <a href="" data-target="#modal-show-{{$us->slug}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-primary">Ver</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                                        
                                        
                                        <td >
                                            <div align="center">
                                            @can('user.edit')
                                           <a href="{{ route('user.edit', $us->slug) }}" class="btn btn-sm btn-primary">Editar</a>
                                                @endcan
                                            </div>
                                         </td>
                        
                             
                    
                                        <td >
                                            <div align="center">
                                            @can('user.destroy')
                                                <a href="" data-target="#modal-delete-{{$us->slug}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-danger">Eliminar</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                      
                                       
                        			</tr>
                                    
                                    @include('user.modal')
                                    @include('user.showdal')
                                    @endif
                                @endforeach 
                     </tbody> 
              </table>
            {{$user->render()}}
                        
                        	
                        
                        </div> 
                        
                         
                </div>
            </div>
        </div>
    </div>

@endsection