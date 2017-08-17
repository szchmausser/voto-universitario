@if((Auth::user()->role === 'admin') || (Auth::user()->role === 'supervisor' || (Auth::user()->role === 'editor')))

	<!-- 
	AGREGAR CLASE AL FORMULARIO CON LARAVEL COLLECTIVE:
	https://stackoverflow.com/questions/31690937/laravel-add-multiple-classes-when-using-formopen
	-->
	{!! Form::open(['action' => ['CRUDController@store'], 'class' => '']) !!}

	<div class="form-row">
		
		<div class="form-group col-md-6 @if ($errors->has('cedula')) has-error @endif">
			{{csrf_field()}}
			{!! Form::label('CEDULA', 'Cedula:', array('class' => 'col-form-label')) !!}
			{!! Form::text('cedula', null, ['class' => 'form-control', 'autofocus', 'placeholder' => '']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('cedula')}}</span>
		</div>

		<div class="form-group col-md-6 @if ($errors->has('sexo')) has-error @endif">
			{!! Form::label('SEXO', 'Sexo:', array('class' => 'col-form-label')) !!}
			{{ Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], null, ['placeholder' => 'Indique el sexo...', 'class' => 'form-control']) }}
			<span style="color:#A94442" class="help-block">{{ $errors->first('sexo')}}</span>
		</div>

	</div>

	<div class="form-row">

		<div class="form-group col-md-6 @if ($errors->has('nombres')) has-error @endif">
			{!! Form::label('NOMBRES', 'Nombres:', array('class' => 'col-form-label')) !!}
			{!! Form::text('nombres', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('nombres')}}</span>
		</div>

		<div class="form-group col-md-6  @if ($errors->has('apellidos')) has-error @endif">
			{!! Form::label('APELLIDOS', 'Apellidos:', array('class' => 'col-form-label')) !!}
			{!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('apellidos')}}</span>
		</div>

	</div>

	<div class="form-row">

		<div class="form-group col-md-6 @if ($errors->has('universidad')) has-error @endif">
			{!! Form::label('UNIVERSIDAD', 'Universidad:', array('class' => 'col-form-label')) !!}
			{!! Form::text('universidad', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('universidad')}}</span>
		</div>

		<div class="form-group col-md-6 @if ($errors->has('carrera')) has-error @endif">
			{!! Form::label('CARRERA', 'Carrera:', array('class' => 'col-form-label')) !!}
			{!! Form::text('carrera', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('carrera')}}</span>
		</div>

	</div>

	<div class="form-row">

		<div class="form-group col-md-4 @if ($errors->has('estado')) has-error @endif">
			{!! Form::label('ESTADO', 'Estado:', array('class' => 'col-form-label')) !!}
			{!! Form::text('estado', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('estado')}}</span>
		</div>

		<div class="form-group col-md-4 @if ($errors->has('municipio')) has-error @endif">
			{!! Form::label('MUNICIPIO', 'Municipio:', array('class' => 'col-form-label')) !!}
			{!! Form::text('municipio', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('municipio')}}</span>
		</div>

		<div class="form-group col-md-4 @if ($errors->has('parroquia')) has-error @endif">
			{!! Form::label('PARROQUIA', 'Parroquia:', array('class' => 'col-form-label')) !!}
			{!! Form::text('parroquia', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('parroquia')}}</span>
		</div>

	</div>

	<div class="form-row">

		<div class="form-group col-md-4 @if ($errors->has('centro')) has-error @endif">
			{!! Form::label('CENTRO', 'Centro:') !!}
			{!! Form::text('centro', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('centro')}}</span>
		</div>

		<div class="form-group col-md-4 @if ($errors->has('sector')) has-error @endif">
			{!! Form::label('SECTOR', 'Sector:') !!}
			{!! Form::text('sector', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('sector')}}</span>
		</div>

		<div class="form-group col-md-4 @if ($errors->has('subsector')) has-error @endif">
			{!! Form::label('SUBSECTOR', 'Subsector:') !!}
			{!! Form::text('subsector', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('subsector')}}</span>
		</div>

	</div>

	<div class="form-row">

		<div class="form-group col-md-6 @if ($errors->has('voto')) has-error @endif">
			{{ Form::label('VOTO', 'Voto:') }}
			{{ Form::select('voto', ['S' => 'Si', 'N' => 'No'], null, ['placeholder' => 'Indique si votó...', 'class' => 'form-control']) }}
			<span style="color:#A94442" class="help-block">{{ $errors->first('voto')}}</span>
		</div>

		<div class="form-group col-md-6 @if ($errors->has('telefono')) has-error @endif">
			{!! Form::label('TELEFONO', 'Telefono:') !!}
			{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('telefono')}}</span>
		</div>

	</div>

		<div class="form-group">
			<span class="col-md-5"></span>
			{!! Form::button('<i class="fa fa-save" aria-hidden="true"></i> Guardar', array('type' => 'submit', 'class' => 'btn btn-primary col-md-1')) !!}
			<!-- https://laravel.io/forum/09-25-2014-how-to-get-font-awesome-icons-to-show-up-when-using-link-to-route -->
			{!! Html::decode(link_to_route('index', '<i class="fa fa-backward" aria-hidden="true"></i> Volver', array(), ['class' => 'btn btn-info col-md-1'])) !!}
			<span class="col-md-5"></span>
		</div>
		
	{!! Form::close() !!}

@elseif (Auth::user()->role === '')

	<p>No puedes crear nuevos registros...</p>

@endif