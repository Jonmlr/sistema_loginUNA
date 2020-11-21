<link rel="stylesheet" href="{{ asset('css/circle.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circu.css') }}" />
<script src="{{ asset('js/index.js') }}"></script>		
        
        <div class="form-group">
			 {!! Form::label('nombre', 'Nombre') !!} <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Campo obligatorio" class="btn btn-circle-micro btn-danger"><i class="fa fa-list">!</i></button>
             {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => "Nombre del Movimiento..."]) !!} 
        </div>
        
        <div class="form-group">
			{!! Form::label('descripcion', 'Descripción') !!} <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Campo obligatorio" class="btn btn-circle-micro btn-danger"><i class="fa fa-list">!</i></button>
            {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => "Descripción del Movimiento..."]) !!}
		</div>
        
        <div class="form-group">
			{!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => "ID del Movimiento..."]) !!}
		</div>
        
          @section('scripts')
       
       	 <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>

         <script>
		 
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