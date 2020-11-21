<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.icon-large.mins.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Asignación de Equipos')
  
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
                    
                        <h3 class="pb-1">Asignación de Equipos @can('asignado.create')
                                    <a href="asignado/create">
                                    <button class="btn btn-sm btn-success">Crear</button></a>
                                @endcan </h3>
                                
                                
                                <h3 class="pb-1">Total creadas: <button type="button" class="btn btn-circle-lg btn-warning">
                                                     <i class="fa fa-list">{{$asignado->total()}}</i>    
                          		</button></h3>
                                
                               
                                
                                
                        
                    </div>
                    </div>
                    
                    @include('asignado.search')

    
                        <div class="panel-body">
                        
                        	<table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th >Usuario</th>
                                        <th >Código UNA</th>
                                        <th >Tipo de equipo</th>
                                        <th colspan="3"><div align="center">Opciones</div></th>
                                    </tr>
                                </thead>
                                
                            <tbody>    
                                
                   				@foreach ($asignado as $asig)
                                    <tr>
                         
                                        @if ($asig->estadoequi == 'OPERATIVO')
                    
                                          @if($asig->iduser == $user_ultima_id)
                                          
                                          <td>&nbsp;</td>

                                          @else
                                          <td>{{ $asig->nameus }} {{ $asig->namelast }}</td>
                                          <?php 
										  	    $user_ultima_id =  $asig->iduser;             				 
										  
										  ?>
                                          
                                          @endif
                                          
                                          
                                          <td>{{ $asig->codigou }}</td> 
                                          <td>{{ $asig->nombrete }}</td>
          
                                          <td >
                                            <div align="center">
                                            @can('asignado.show')
                                                <a href="" data-target="#modal-show-{{$asig->id}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-primary">Ver</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                                        
                                        <td >
                                            <div align="center">
                                            @can('asignado.edit')
                                                <a href="{{ route('asignado.edit', $asig->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                                @endcan
                                            </div>
                                      </td>
                        
                             
                    
                                        <td >
                                            <div align="center">
                                            @can('asignado.destroy')
                                                <a href="" data-target="#modal-delete-{{$asig->id}}" data-toggle="modal">
                                                    <button class="btn btn-sm btn-danger">Eliminar</button></a>
                                                    @endcan
                                            </div>
                                        </td>
                      
                                       
                        			</tr>
                                    @include('asignado.modal')
                                    @include('asignado.showdal')
                                    @endif
                                @endforeach 
                     </tbody> 
              </table>
            {{$asignado->render()}}
                        
                        	
                        
                        </div> 
                        
                         
                </div>
          </div>
      </div>
</div>

@endsection