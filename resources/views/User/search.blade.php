<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.icon-large.mins.css') }}" />



{!! Form::open(array('url'=>'user','method'=>'GET','autocomplete'=>'off','user'=>'search')) !!}
<div class="row">
   <div class="col-lg-12">
        <div class="input-group">
                <input name="searchText" type="text" class="form-control" placeholder="Buscar..." value="{{$searchText}}" /> 
				<p></p>
                <p>&nbsp;</p>
                <p> <span class="input-group-btn">
                </span></p>
                <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <button type="reset" class="btn btn-danger">X</button>

                </span>
                
                    
      </div>
    </div>
</div>
{{Form::close()}}