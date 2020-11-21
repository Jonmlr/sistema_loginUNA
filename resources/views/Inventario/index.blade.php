<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

@extends('layouts.app') 
  
@section('title', 'Inventario')
  
@section('content')
  
@include('common.success')
  
    <p>
    
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Inventario <a href="inventario/create"><button class="btn btn-sm btn-success">Crear</button></a></h3>
      </div>
      <p align="right">&nbsp;</p>
      <p align="right">&nbsp;</p>
      <p align="right">&nbsp;</p>
      <p align="right">&nbsp;</p>
      <p align="right">&nbsp;</p>
      <h3 align="right">Total Equipos en Inventario</h3>
      <p align="right">&nbsp;</p>

      
        <div align="right">
          <button type="button" class="btn btn-circle-lg btn-warning">
          <i class="fa fa-list">{{ count($inventario) }}</i> </button>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr bgcolor="#343A40">
                            <th width="1">ID</th>
                            <th width="117">Equipo</th>
                            <th width="117">Tipo de Equipo</th>
                            <th width="117">Sede</th>
                            <th colspan="3"><div align="center">Opciones</div></th>
                        </tr>
                    </thead>
                      @foreach($inventario as $in)
                        <tr>
                        
                            <td>{{ $in->id }}</td>
                            
                             @foreach($equipos as $equi)
                          @if($in->equipos_id == $equi->id)
                          <td>{{ $equi->codigou }}</td>
                          @endif
                          @endforeach
                          
                          
             			@foreach($equipos as $equi)
                              @foreach($tipoequipo as $tip)
                                  @if($in->equipos_id == $equi->id)
                                      @if($equi->tiposequipos_id == $tip->id)
                                      	<td>{{ $tip->nombre }}</td>
                                      @endif
                                  @endif
                              @endforeach
                            @endforeach
                        
                            @foreach($lugar as $lu)
                          @if($in->lugar_id == $lu->id)
                          <td>{{ $lu->nombre }}</td>
                          @endif
                          @endforeach
                          
                        
        
                            <td width="36">
                                <div align="center">
                                    <a href="{{ route('inventario.edit', $in->slug) }}" class="btn btn-sm btn-primary">Editar</a>
                                </div>
                             </td>
                             
                            <td width="68">
                                <div align="center">
                                    <a href="" data-target="#modal-delete-{{$in->slug}}" data-toggle="modal">
                                        <button class="btn btn-sm btn-danger">Eliminar</button></a>
                                </div>
                            </td>
                                       
                        </tr>
                        
                        @include('inventario.modal')
                    @endforeach  
              </table>
            </div>
            {{$inventario->render()}}
        </div>
    </div>
  
@endsection
