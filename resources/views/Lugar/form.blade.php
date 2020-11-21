<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circle.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circu.css') }}" />
<script src="{{ asset('js/index.js') }}"></script>

		<div class="form-group">
			 {!! Form::label('nombre', 'Nombre') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Solo letras permitidas | Caracteres Max: 30" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
             {!! Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre', 'placeholder' => "Nombre de la unidad administrativa...", 'onkeypress'=>"return soloLetras(event)", 'maxlength'=>"100"]) !!} 
        </div>
                       
		<div class="form-group">
			{!! Form::label('direccion', 'Dirección') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Números y letras permitidas | Caracteres Max: 250" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
            {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => "Dirección de la unidad administrativa...", 'maxlength'=>"100"]) !!}
		</div>
        
        <div class="form-group">
			{!! Form::label('telefono', 'Teléfono') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Solo números permitidos | Total: 11 | Ejemplo: 0414xxxxxxx," class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
            {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => "Teléfono de la unidad administrativa...", 'maxlength'=>"11", 'onkeypress'=>"return soloNumeros(event)"]) !!}
		</div>
        
        <div class="form-group">
			{!! Form::label('descripcion', 'Descripción') !!} <button type="button" data-toggle="popover" title="Campo opcional" data-content="Números y  letras permitidas | Caracteres Max: 250" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
            {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => "Descripción de la unidad administrativa...",'maxlength'=>"250"]) !!}
		</div>
        
        
        <div class="form-group">
			{!! Form::label('slug', ' ') !!}
            {!! Form::hidden('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => "URL amigable..."]) !!}
		</div>
       
       @section('scripts')
       
       	 <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>

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
		 
	
		 
		 	$(document).ready(function()
			{
				$("#nombre, #slug").stringToSlug
				({
					callback: function(text)
					{
						$("#slug").val(text);
					}
				});
				
			});
		 
         
         </script>

       @endsection
