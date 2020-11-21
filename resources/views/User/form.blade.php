<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circle.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circu.css') }}" />

<script src="{{ asset('js/index.js') }}"></script>		
  
  
 <div class="form-group">
			 {!! Form::label('lugar', 'Unidad Administrativa') !!} <span class="asterisco">(*)</span>
   <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se requiere una Unidad Administrativa" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
             
             <select name="lugar_id" class="form-control">
                <option disabled selected>Selecciona una Unidad Administrativa...</option>
             	@foreach ($lugar as $lu)
                	<option value="{{$lu->id}}">{{$lu->nombre}}</option>
                @endforeach
             </select>
             
        </div> 
  
  
<div class="form-group">
	{!! Form::label('roles', 'Rol') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Todos los usuarios deben poseer un Rol" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>

	<select name="roles" class="form-control">
                <option disabled selected>Selecciona un Rol...</option>
             	@foreach ($roles as $rol)
                	<option value="{{$rol->id}}">{{$rol->name}}</option>
                @endforeach
    </select>
            </div>
            
	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Solo letras permitidas | Caracteres Max: 30" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
		<div>
			
        	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Nombre del Usuario...", 'onkeypress'=>"return soloLetras(event)", 'maxlength'=>"30"]) !!} 
        </div>

    </div>
    
    <div class="form-group">
		{!! Form::label('lastname', 'Apellido') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Solo letras permitidas | Caracteres Max: 30" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
		<div>
			
        	{!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => "Apellido del Usuario...", 'onkeypress'=>"return soloLetras(event)", 'maxlength'=>"30"]) !!} 
        </div>

    </div>

    
    <div class="form-group">
			{!! Form::label('cedula', 'Cédula') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Solo números permitidos | Min: 7 | Max: 10" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
            {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => "Cédula del Usuario...", 'maxlength'=>"10", 'onkeypress'=>"return soloNumeros(event)"]) !!}
		</div>
    
    <div class="form-group">
			 {!! Form::label('email', 'Correo electrónico') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Debe contener la estructura de un E-Mail: ejemplo@ejemplo.com/.com.ve/.net" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
             {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Correo electrónico personal...", 'maxlength'=>"30"]) !!} 
        </div>
        
        <div class="form-group">
			{!! Form::label('password', 'Contraseña') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Números, letras y caracteres especiales permitidos" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
            {!! Form::password('password',['class' => 'form-control', 'placeholder' => "Contraseña del Usuario...", 'maxlength'=>"15"]) !!}
		</div>
        
        
          <div class="form-group">
			{!! Form::label('password_confirmation', 'Confirmar Contraseña') !!} <span class="asterisco">(*)</span> <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Números, letras y caracteres especiales permitidos" class="btn btn-circle-micro btn-primary"><i class="fa fa-list">?</i></button>
            {!! Form::password('password_confirmation',['class' => 'form-control', 'placeholder' => "Confirmar Contraseña del Usuario...", 'maxlength'=>"15"]) !!}
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

