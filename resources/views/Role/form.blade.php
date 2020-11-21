<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circle.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circu.css') }}" />
<script src="{{ asset('js/index.js') }}"></script>		
    


        <div class="form-group">
            {{ Form::label('name', 'Nombre') }} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Solo letras permitidas | Caracteres Max: 30" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
        
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Nombre del Rol...", 'onkeypress'=>"return soloLetras(event)", 'maxlength'=>"30"]) !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('description', 'Descripción') }} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo opcional" data-content="Breve descripción opcional" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
        
            {{ Form::text('description', null, ['class' => 'form-control','placeholder' => "Descripción del Rol...", 'maxlength'=>"100"]) }}
        </div>
        
        

<div class="form-group">
    {{ Form::label('slug', ' ') }}
    {{ Form::hidden('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
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
				$("#cedula, #slug").stringToSlug
				({
					callback: function(text)
					{
						$("#slug").val(text);
					}
				});
				
			});
		 
         
         </script>

       @endsection

	