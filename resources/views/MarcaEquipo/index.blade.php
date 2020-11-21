<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.icon-large.mins.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Marca de Equipos')
  
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
                        <h3 class="pb-1">Marca de Equipos @can('marcaequipo.create')
                                    <a href="marcaequipo/create">
                                    <button class="btn btn-sm btn-success">Crear</button></a>
                                @endcan 
                                
                                <h3 class="pb-1">Total creadas: <button type="button" class="btn btn-circle-lg btn-warning">
                                                     <i class="fa fa-list">{{$marcaequipo->total()}}</i> 
                                              </button></h3>
                        </h3>
                        </div>
                    </div>
                    @include('marcaequipo.search')

    
                        <div class="panel-body">
                        
                        	<table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th >Nombre</th>
                                        <th >Modelo</th>
                                        <th colspan="3"><div align="center">Opciones</div></th>
                                    </tr>
                                </thead>
                                
                            <tbody>    
                                
                   				@foreach ($marcaequipo as $marc)
                                    <tr>
                         
                                        <td>{{ $marc->nombreme }}</td>
                                        <td>{{ $marc->modelo }}</td>
                                        
                                        
                                        <td >
                                            <div align="center">
                                            @can('marcaequipo.show')
                                                <a href="" data-target="#modal-show-{{$marc->slug}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-primary">Ver</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                                                                                
                                        <td >
                                            <div align="center">
                                            @can('marcaequipo.edit')
                                                <a href="{{ route('marcaequipo.edit', $marc->slug) }}" class="btn btn-sm btn-primary">Editar</a>
                                                @endcan
                                            </div>
                                         </td>
                        
                             
                    
                                        <td >
                                            <div align="center">
                                            @can('marcaequipo.destroy')
                                                <a href="" data-target="#modal-delete-{{$marc->slug}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-danger">Eliminar</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                      
                                       
                        			</tr>
                                    @include('marcaequipo.modal')
                                    @include('marcaequipo.showdal')
                                @endforeach 
                     </tbody> 
              </table>
            {{$marcaequipo->render()}}
                        
                        	
                        
                        </div> 
                        
                         
                </div>
            </div>
        </div>
    </div>

@endsection