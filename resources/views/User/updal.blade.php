<link rel="stylesheet" href="{{ asset('css/btns.css') }}" />

<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-edit-{{$user->slug}}">
	{{Form::Open(array('action'=>array('UserController@edit', $user->slug),'method'=>"POST">  method_field('PUT')  )) }}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                            <h2 class="modal-title">Actualizar Usuario</h2>
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
			</div>
			<div class="modal-body">
				<p>Confirme si desea Actualizar el Usuario</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-sm btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>