<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circle.css') }}" />
<link rel="stylesheet" href="{{ asset('css/circu.css') }}" />
<script src="{{ asset('js/index.js') }}"></script>	

            <div class="form-group">
           {!! Form::label('user', 'Usuarios') !!} <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se necesita un Usuario para asignar" class="btn btn-circle-micro btn-danger"><i class="fa fa-list">!</i></button>
                         
                         <select name="user_id" class="form-control">
                            <option disabled selected>Selecciona un usuario...</option>
                            @foreach ($user as $us)
                                <option value="{{$us->id}}">{{$us->name}}</option>
                            @endforeach
                         </select>
                         
             </div>
        
        
        <div class="form-group">
			 {!! Form::label('role', 'Roles') !!} <button type="button" data-toggle="popover" title="Campo obligatorio" data-content="Se necesita un Rol para asignar" class="btn btn-circle-micro btn-danger"><i class="fa fa-list">!</i></button>
             
                 <select name="role_id" class="form-control">
                  <option disabled selected>Selecciona un estado...</option>
                  @foreach ($role as $ro)
                  <option value="{{$ro->id}}">{{$ro->nombre}}</option>
                  @endforeach
                </select>

            </div>
            
            <div class="form-group">
			{!! Form::label('slug', 'Slug') !!} 
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => "ID del equipo"]) !!}
		</div>

       
      