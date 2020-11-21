<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circle.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circu.css') }}" />
<script src="{{ asset('js/index.js') }}"></script>		
        
        {!! Form::hidden('user_id', auth()->user()->id) !!}
   
        <div class="form-group">
			 {!! Form::label('tiposequipos', 'Tipo de Equipo') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se requiere un Tipo de Equipo" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
             
          <select name="tiposequipos_id" class="form-control">
                <option disabled selected>Selecciona un tipo de equipo...</option>
             	@foreach ($tipoequipo as $tip)
                	<option value="{{$tip->id}}">{{$tip->nombre}}</option>
                @endforeach
             </select>
             
</div>
       
        
         		<div class="form-group">
			 {!! Form::label('marcasequipo', 'Marca de Equipo') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se requiere una Marca de Equipo" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
             
             <select name="marcasequipos_id" class="form-control">
                <option disabled selected>Selecciona una marca de equipo...</option>
             	@foreach ($marcaequipo as $marcs)
                	<option value="{{$marcs->id}}">{{$marcs->nombre}}</option>
                @endforeach
             </select>
             
        </div>
        
        <div class="form-group">
			 {!! Form::label('lugar', 'Unidad Administrativa') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se requiere una Unidad Administrativa" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
             
             <select name="lugar_id" class="form-control">
                <option disabled selected>Selecciona una Unidad Administrativa...</option>
             	@foreach ($lugar as $lu)
                	<option value="{{$lu->id}}">{{$lu->nombre}}</option>
                @endforeach
             </select>
             
        </div>
        
       <div class="form-group">
			 {!! Form::label('estado', 'Estado') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se requiere un Estado de Equipo" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
                 <select name="estado" class="form-control">
                  <option disabled selected>Selecciona un estado...</option>
                  <option value="OPERATIVO">Operativo</option>
                  <option value="INACTIVO">Inactivo</option>
                  <option value="EN REPARACIÓN">En reparación</option>
                </select>
            </div>
	
        <div class="form-group">
			<p>{!! Form::label('codigou', 'Código UNA') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Solo números permitidos | Min: 6 | Max: 8" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
			  {!! Form::text('codigou', null, ['class' => 'form-control', 'placeholder' => "Código UNA del usuario...", 'maxlength'=>"8", 'onkeypress'=>"return soloNumeros(event)"]) !!}
		  </p>
          
          <div class="form-group">
			<p>{!! Form::label('serial', 'Serial Físico') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Números y letras permitidas | Max: 20 | Colocar: N/P si no posee" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
			  {!! Form::text('serial', null, ['class' => 'form-control', 'placeholder' => "Serial Físico del Equipo...", 'maxlength'=>"20"]) !!}
		  </p>
        
        <div class="form-group">
			{!! Form::label('descripcion', 'Descripción') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Números y letras permitidas | Caracteres Max: 250" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
            {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => "Descripción del equipo...",'maxlength'=>"250"]) !!}
		</div>
        
        <div class="form-group">
			{!! Form::label('observaciones', 'Observaciones') !!} <button type="button" data-toggle="popover" title="Campo opcional" data-content="Detalles adicionales del Equipo" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
            {!! Form::text('observaciones', null, ['class' => 'form-control', 'placeholder' => "Observaciones del equipo...",'maxlength'=>"250"]) !!}
		</div>
        
        <div class="form-group">
			{!! Form::label('slug', ' ') !!} 
            {!! Form::hidden('slug', null, ['class' => 'form-control', 'placeholder' => "URL amigable..."]) !!}
		</div>
        
       @section('scripts')
       
			<script  src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
             <script>
			 
			 function soloLetras(e)
		{
			   key = e.keyCode || e.which;
			   tecla = String.fromCharCode(key).toLowerCase();
			   letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
			   especiales = "8-37-39-46";
	
			   tecla_especial = false
				   for(var i in especiales)
					{
						if(key == especiales[i])
						{
							tecla_especial = true;
							break;
						}
					}

			if(letras.indexOf(tecla)==-1 && !tecla_especial)
			{
				return false;
			}
    	}
		
		
		function soloNumeros(e)
		{
			   key = e.keyCode || e.which;
			   tecla = String.fromCharCode(key).toLowerCase();
			   letras = "0123456789";
			   especiales = "8-37-39-46";
	
			   tecla_especial = false
				   for(var i in especiales)
					{
						if(key == especiales[i])
						{
							tecla_especial = true;
							break;
						}
					}

			if(letras.indexOf(tecla)==-1 && !tecla_especial)
			{
				return false;
			}
    	}
			 
			 
                $(document).ready(function(){
                    $("#codigou,#slug").stringToSlug({
                        callback: function(text){
                            $("#slug").val(text);
                        }
                    });
                });
            </script>
		@endsection﻿