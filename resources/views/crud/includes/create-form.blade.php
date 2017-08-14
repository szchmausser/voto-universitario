@if((Auth::user()->role === 'admin') || (Auth::user()->role === 'supervisor' || (Auth::user()->role === 'editor')))

	{!! Form::open(['action' => ['CRUDController@store']]) !!}

		<div class="form-group">
			{{csrf_field()}}
			{!! Form::label('CEDULA', 'Cedula:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('cedula')}}</span>
			{!! Form::text('cedula', null, ['class' => 'form-control', 'autofocus']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('APELLIDOS', 'Apellidos:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('apellidos')}}</span>
			{!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('NOMBRES', 'Nombres:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('nombres')}}</span>
			{!! Form::text('nombres', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{{ Form::label('SEXO', 'Sexo:') }}
			<span style="color:#A94442" class="help-block">{{ $errors->first('sexo')}}</span>
			{{ Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], null, ['placeholder' => 'Indique el sexo...', 'class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{!! Form::label('UNIVERSIDAD', 'Universidad:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('universidad')}}</span>
			{!! Form::text('universidad', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('CARRERA', 'Carrera:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('carrera')}}</span>
			{!! Form::text('carrera', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ESTADO', 'Estado:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('estado')}}</span>
			{!! Form::text('estado', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('MUNICIPIO', 'Municipio:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('municipio')}}</span>
			{!! Form::text('municipio', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('PARROQUIA', 'Parroquia:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('parroquia')}}</span>
			{!! Form::text('parroquia', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('CENTRO', 'Centro:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('centro')}}</span>
			{!! Form::text('centro', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('SECTOR', 'Sector:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('sector')}}</span>
			{!! Form::text('sector', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('SUBSECTOR', 'Subsector:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('subsector')}}</span>
			{!! Form::text('subsector', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{{ Form::label('VOTO', 'Voto:') }}
			<span style="color:#A94442" class="help-block">{{ $errors->first('voto')}}</span>
			{{ Form::select('voto', ['S' => 'Si', 'N' => 'No'], null, ['placeholder' => 'Indique si votó...', 'class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{!! Form::label('TELEFONO', 'Telefono:') !!}
			<span style="color:#A94442" class="help-block">{{ $errors->first('telefono')}}</span>
			{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			<span class="col-md-5"></span>
			{!! Form::button('<i class="fa fa-save" aria-hidden="true"></i> Guardar', array('type' => 'submit', 'class' => 'btn btn-primary col-md-1')) !!}
			<a href="{{action('CRUDController@index')}}" class="btn btn-info col-md-1"><i class="fa fa-backward" aria-hidden="true"></i> Volver</a>
			<span class="col-md-5"></span>
		</div>
		
	{!! Form::close() !!}

@elseif (Auth::user()->role === '')

	<p>No puedes crear nuevos registros...</p>

@endif