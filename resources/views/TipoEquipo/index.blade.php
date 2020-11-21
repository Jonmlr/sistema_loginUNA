<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.icon-large.mins.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Tipo de Equipos')
  
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
                        <h3 class="pb-1">Tipo de Equipos @can('tipoequipo.create')
                                    <a href="tipoequipo/create">
                                    <button class="btn btn-sm btn-success">Crear</button></a>
                                @endcan 
                                
                                <h3 class="pb-1">Total creados: <button type="button" class="btn btn-circle-lg btn-warning">
                                                     <i class="fa fa-list">{{$tipoequipo->total()}}</i> 
                                              </button></h3>
                        </h3>
                        </div>
                    </div>
                    @include('tipoequipo.search')

    
                        <div class="panel-body">
                        
                        	<table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th >Nombre</th>
                                        <th colspan="3"><div align="center">Opciones</div></th>
                                    </tr>
                                </thead>
                                
                            <tbody>    
                                
                   				@foreach ($tipoequipo as $tip)
                                    <tr>
                         
                                        <td>{{ $tip->nombrete }}</td>
                                        
                                        
                                         <td >
                                            <div align="center">
                                            @can('tipoequipo.show')
                                                <a href="" data-target="#modal-show-{{$tip->slug}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-primary">Ver</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                                         
                                        <td >
                                            <div align="center">
                                            @can('tipoequipo.edit')
                                                <a href="{{ route('tipoequipo.edit', $tip->slug) }}" class="btn btn-sm btn-primary">Editar</a>
                                                @endcan
                                            </div>
                                         </td>
                        
                             
                    
                                        <td >
                                            <div align="center">
                                            @can('tipoequipo.destroy')
                                                <a href="" data-target="#modal-delete-{{$tip->slug}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-danger">Eliminar</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                      
                                       
                        			</tr>
                                    @include('tipoequipo.modal')
                                    @include('tipoequipo.showdal')
                                @endforeach 
                     </tbody> 
              </table>
            {{$tipoequipo->render()}}
                        
                        	
                        
                        </div> 
                        
                         
                </div>
            </div>
        </div>
    </div>

@endsection