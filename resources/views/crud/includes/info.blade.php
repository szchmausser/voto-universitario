@if($errors->any())
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
		<span>Hay errores en el formulario, por favor revise los mensajes...</span>
	</div>
@endif

@if(Session::has('info'))
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
		{{ Session::get('info') }}
	</div>
@endif