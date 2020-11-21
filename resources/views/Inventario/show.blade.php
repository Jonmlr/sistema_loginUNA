@extends('layouts.app') 

@section('title', 'Inventario')

@section('content')

		@include('common.success')
        
        @extends('layouts.app')

    
        <div class="card text-center" style="width: 18rem; margin-top:70px">
              <div class="text-center">
                   <h6 class="card-title">A: {{$inventario->equipo_id}} </h6>
                    <h6 class="card-title">B: {{$inventario->lugar_id}}</h6>
                    
                    <a href="/inventario" class="btn btn-primary">Atrás</a>
		</div>
@endsection
