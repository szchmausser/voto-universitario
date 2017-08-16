@if((Auth::user()->role === 'admin') || (Auth::user()->role === 'supervisor'))

	{{ Form::open(['action' => ['CRUDController@update', $crud->id], 'method' => 'PUT',]) }}

	<!--Acceder al valor de un campo (en este caso rol) de un usuario logueado desde una vista-->
	<!--https://laracasts.com/discuss/channels/general-discussion/can-i-access-current-user-data-in-blade?page=1-->
	<!--Forma correcta de determinar el if-->
	<!--https://laracasts.com/discuss/channels/laravel/good-practice-to-conditionally-show-views-from-routescontrollers?page=1-->

		<div class="form-group">
			{!! Form::label('CEDULA', 'Cedula:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('cedula')}}</span>
			{!! Form::text('cedula', $crud->CEDULA, ['class' => 'form-control', 'autofocus', 'autofocus']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('APELLIDOS', 'Apellidos:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('apellidos')}}</span>
			{!! Form::text('apellidos', $crud->APELLIDOS, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('NOMBRES', 'Nombres:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('nombres')}}</span>
			{!! Form::text('nombres', $crud->NOMBRES, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{{ Form::label('SEXO', 'Sexo:') }}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('sexo')}}</span>
			{{ Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], $crud->SEXO, ['placeholder' => 'Indique el sexo...', 'class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{!! Form::label('UNIVERSIDAD', 'Universidad:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('universidad')}}</span>
			{!! Form::text('universidad', $crud->UNIVERSIDAD, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('CARRERA', 'Carrera:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('carrera')}}</span>
			{!! Form::text('carrera', $crud->CARRERA, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ESTADO', 'Estado:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('estado')}}</span>
			{!! Form::text('estado', $crud->ESTADO, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('MUNICIPIO', 'Municipio:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('municipio')}}</span>
			{!! Form::text('municipio', $crud->MUNICIPIO, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('PARROQUIA', 'Parroquia:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('parroquia')}}</span>
			{!! Form::text('parroquia', $crud->PARROQUIA, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('CENTRO', 'Centro:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('centro')}}</span>
			{!! Form::text('centro', $crud->CENTRO, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('SECTOR', 'Sector:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('sector')}}</span>
			{!! Form::text('sector', $crud->SECTOR, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('SUBSECTOR', 'Subsector:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('subsector')}}</span>
			{!! Form::text('subsector', $crud->SUBSECTOR, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{{ Form::label('VOTO', 'Voto:') }}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('voto')}}</span>
			{{ Form::select('voto', ['S' => 'Si', 'N' => 'No'], $crud->VOTO, ['placeholder' => 'Indique si votó...', 'class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{!! Form::label('TELEFONO', 'Telefono:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('telefono')}}</span>
			{!! Form::text('telefono', $crud->TELEFONO, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			<span class="col-md-5"></span>
			{!! Form::button('<i class="fa fa-save" aria-hidden="true"></i> Editar', array('type' => 'submit', 'class' => 'btn btn-primary col-md-1')) !!}
			<!-- https://laravel.io/forum/09-25-2014-how-to-get-font-awesome-icons-to-show-up-when-using-link-to-route -->
			{!! Html::decode(link_to_route('index', '<i class="fa fa-backward" aria-hidden="true"></i> Volver', array(), ['class' => 'btn btn-info col-md-1'])) !!}
			<span class="col-md-5"></span>
		</div>

	{{ Form::close() }}

@elseif (Auth::user()->role === 'editor')

	{{ Form::open(['action' => ['CRUDController@update', $crud->id], 'method' => 'PUT',]) }}

		<div class="form-group">
			{!! Form::label('CEDULA', 'Cedula:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('cedula')}}</span>
			{!! Form::text('cedula', $crud->CEDULA, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('APELLIDOS', 'Apellidos:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('apellidos')}}</span>
			{!! Form::text('apellidos', $crud->APELLIDOS, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('NOMBRES', 'Nombres:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('nombres')}}</span>
			{!! Form::text('nombres', $crud->NOMBRES, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{{ Form::label('SEXO', 'Sexo:') }}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('sexo')}}</span>
			{{ Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], $crud->SEXO, ['placeholder' => 'Indique el sexo...', 'class' => 'form-control', 'readonly' => 'readonly']) }}
		</div>

		<div class="form-group">
			{!! Form::label('UNIVERSIDAD', 'Universidad:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('universidad')}}</span>
			{!! Form::text('universidad', $crud->UNIVERSIDAD, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('CARRERA', 'Carrera:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('carrera')}}</span>
			{!! Form::text('carrera', $crud->CARRERA, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ESTADO', 'Estado:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('estado')}}</span>
			{!! Form::text('estado', $crud->ESTADO, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('MUNICIPIO', 'Municipio:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('municipio')}}</span>
			{!! Form::text('municipio', $crud->MUNICIPIO, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('PARROQUIA', 'Parroquia:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('parroquia')}}</span>
			{!! Form::text('parroquia', $crud->PARROQUIA, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('CENTRO', 'Centro:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('centro')}}</span>
			{!! Form::text('centro', $crud->CENTRO, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('SECTOR', 'Sector:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('sector')}}</span>
			{!! Form::text('sector', $crud->SECTOR, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('SUBSECTOR', 'Subsector:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('subsector')}}</span>
			{!! Form::text('subsector', $crud->SUBSECTOR, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		</div>

		<div class="form-group">
			{{ Form::label('VOTO', 'Voto:') }}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('voto')}}</span>
			{{ Form::select('voto', ['S' => 'Si', 'N' => 'No'], $crud->VOTO, ['placeholder' => 'Indique si votó...', 'class' => 'form-control', 'autofocus']) }}
		</div>

		<div class="form-group">
			{!! Form::label('TELEFONO', 'Telefono:') !!}
			<span style="color:#D8476F" class="help-block">{{ $errors->first('telefono')}}</span>
			{!! Form::text('telefono', $crud->TELEFONO, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			<span class="col-md-5"></span>
			{!! Form::button('<i class="fa fa-save" aria-hidden="true"></i> Editar', array('type' => 'submit', 'class' => 'btn btn-primary col-md-1')) !!}
			<!-- https://laravel.io/forum/09-25-2014-how-to-get-font-awesome-icons-to-show-up-when-using-link-to-route -->
			{!! Html::decode(link_to_route('index', '<i class="fa fa-backward" aria-hidden="true"></i> Volver', array(), ['class' => 'btn btn-info col-md-1'])) !!}
			<span class="col-md-5"></span>
		</div>

	{{ Form::close() }}

@elseif (Auth::user()->role === '')

	<div class="alert alert-danger" role="alert">
		<hp><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Solicitud denegada...</hp>
	</div>

<p>Tu usuario no tiene permisos para editar informacion...</p>

@endif