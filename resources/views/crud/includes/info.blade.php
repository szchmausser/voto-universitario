@if($errors->any())
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
		<span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Hay errores en el formulario, por favor revise los mensajes...</span>
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

@if(Session::has('warning'))
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
		{{ Session::get('warning') }}
	</div>
@endif