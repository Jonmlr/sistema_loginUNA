<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circle.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circu.css') }}" />
<script src="{{ asset('js/index.js') }}"></script>	

		<div class="form-group">
			 {!! Form::label('nombre', 'Nombre') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Solo letras permitidas | Caracteres Max: 30" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
             {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => "Nombre de la Marca...", 'onkeypress'=>"return soloLetras(event)", 'maxlength'=>"30"]) !!} 
        </div>
        
        <div class="form-group">
			{!! Form::label('modelo', 'Modelo') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Números y letras permitidos | Max: 20" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
            {!! Form::text('modelo', null, ['class' => 'form-control', 'placeholder' => "Modelo de la Marca...", 'maxlength'=>"20"]) !!}
		</div>
        
        <div class="form-group">
			{!! Form::label('slug', ' ') !!}
            {!! Form::hidden('slug', null, ['class' => 'form-control', 'placeholder' => "URL amigable..."]) !!}
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