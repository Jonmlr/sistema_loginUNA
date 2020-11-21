<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circle.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circu.css') }}" />

<script src="{{ asset('js/index.js') }}"></script>	
        
        
        <div class="form-group">
			 {!! Form::label('equipos', 'Equipos') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se requiere un Equipo" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
             
             <select name="equipos_id" class="form-control">
                <option disabled selected>Selecciona un equipo para asignar...</option>
                
             	@foreach ($equipos as $equi)
                	@foreach ($tipoequipo as $tip)
                    @if ($equi->estado == 'OPERATIVO')
                    @if($equi->tiposequipos_id == $tip->id)
                	<option value="{{$equi->id}}">{{$equi->codigou}} - {{$tip->nombre}}</option>
                         @endif
                     @endif
                     @endforeach
             @endforeach
                
             </select>
        </div>
       
        
         		<div class="form-group">
			 {!! Form::label('user', 'Usuarios') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se requiere un Usuario" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
             
             <select name="user_id" class="form-control">
                <option disabled selected>Selecciona un usuario...</option>
             	@foreach ($user as $us)
                	<option value="{{$us->id}}">{{$us->name}} {{$us->lastname}}</option>
                @endforeach
             </select>
             
        </div>