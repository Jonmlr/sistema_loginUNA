@extends('layouts.app') 
  
@section('title', 'Movimientos de equipo')
  
@section('content')
  
@include('common.success')
  
    <p>
    
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
         <h3>Listado de Movimientos de Equipo <a href="movimientoequipo/create"><button class="btn btn-sm btn-success">Crear</button></a></h3>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr>
                            <th width="117">Nombre</div></th>
                            <th width="126">Descripción</th>
                            <th colspan="3"><div align="center">Opciones</div></th>
                        </tr>
                    </thead>
                   @foreach ($movimientoequipo as $mo)
                        <tr>
                            <td>{{ $mo->nombre }}</td>
                            <td>{{ $mo->descripcion }}</td>
                            
                            <td width="36">
                                <div align="center">
                               <a href="{{ route('movimientoequipo.edit', $mo->slug) }}" class="btn btn-sm btn-primary">Editar</a>
                                </div>
                             </td>
                             
                            <td width="68">
                                <div align="center">
                                    <a href="" data-target="#modal-delete-{{$mo->slug}}" data-toggle="modal">
                                        <button class="btn btn-sm btn-danger">Eliminar</button></a>
                                </div>
                            </td>
                                       
                        </tr>
                        
                        @include('movimientoequipo.modal')
                    @endforeach  
              </table>
            </div>
            {{$movimientoequipo->render()}}
        </div>
    </div>
  
@endsection