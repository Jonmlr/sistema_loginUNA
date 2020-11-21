<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circle.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circu.css') }}" />
<script src="{{ asset('js/index.js') }}"></script>		

		<div class="form-group">
			 {!! Form::label('equipos', 'Equipos') !!} <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se necesita un Equipo para asignar" class="btn btn-circle-micro btn-danger"><i class="fa fa-list">!</i></button>
             
             <select name="equipos_id" class="form-control">
                <option disabled selected>Selecciona un equipo...</option>
                
                @foreach ($equipos as $equi)
                	@foreach ($tipoequipo as $tip)
                    @if($equi->tiposequipos_id == $tip->id)
                	<option value="{{$equi->id}}">{{$equi->codigou}} - {{$tip->nombre}}</option>
                     @endif
                     @endforeach
             @endforeach
     
             </select>
        </div>
       
        
         		<div class="form-group">
			 {!! Form::label('sede', 'Sedes') !!} <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se necesita una Sede para asignar" class="btn btn-circle-micro btn-danger"><i class="fa fa-list">!</i></button>
             
             <select name="lugar_id" class="form-control">
                <option disabled selected>Selecciona una sede...</option>
             	@foreach ($lugar as $lug)
                	<option value="{{$lug->id}}">{{$lug->nombre}}</option>
                @endforeach
             </select>
             
        </div>
        
        <div class="form-group">
			{!! Form::label('slug', 'URL amigable') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => "URL amigable..."]) !!}
		</div>
        
        @section('scripts')
       
       	 <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>

         <script>
		 
	
		 
		 	$(document).ready(function()
			{
				$("#equipos_id, #slug").stringToSlug
				({
					callback: function(text)
					{
						$("#slug").val(text);
					}
				});
				
			});
		 
         
         </script>

       @endsection

        
       