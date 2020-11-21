<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.icon-large.mins.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Equipos')
  
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
                        <h3 class="pb-1">Equipos @can('equipo.create')
                                    <a href="equipo/create">
                                    <button class="btn btn-sm btn-success">Crear</button></a>
                                @endcan 
                                
                                <h3 class="pb-1">Total creados: <button type="button" class="btn btn-circle-lg btn-warning">
                                                     <i class="fa fa-list">{{$equipo->total()}}</i> 
                                              </button></h3>
                        </h3>
                        </div>
                    </div>
                    @include('equipo.search')

    
                        <div class="panel-body">
                        
                        	<table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th >Código UNA</th>
                                        <th >Tipo de equipo</th>
                                        <th >Serial Físico</th>
                                        <th colspan="3"><div align="center">Opciones</div></th>
                                    </tr>
                                </thead>
                                
                            <tbody>    
                                
                   				@foreach ($equipo as $equi)
                                    <tr>
                         
                                        <td>{{ $equi->codigou }}</td>
                                        <td>{{ $equi->nombrete }}</td>
                                        <td>{{ $equi->serial }}</td>
                                        
                                        
                                        <td >
                                            <div align="center">
                                            @can('equipo.show')
                                                <a href="" data-target="#modal-show-{{$equi->slug}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-primary">Ver</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                                        
                                        <td >
                                            <div align="center">
                                            @can('equipo.edit')
                                                <a href="{{ route('equipo.edit', $equi->slug) }}" class="btn btn-sm btn-primary">Editar</a>
                                                @endcan
                                            </div>
                                         </td>
                    
                                        <td >
                                            <div align="center">
                                            @can('equipo.destroy')
                                                <a href="" data-target="#modal-delete-{{$equi->slug}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-danger">Eliminar</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                      
                                       
                        			</tr>
                                    @include('equipo.modal')
                                    @include('equipo.showdal')
                                @endforeach 
                     </tbody> 
              </table>
            {{$equipo->render()}}
                        
                        	
                        
                        </div> 
                        
                         
                </div>
            </div>
        </div>
    </div>

@endsection