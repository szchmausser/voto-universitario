{{ Debugbar::addMessage('CONTENIDO DE LA VARIABLE', '$errors') }}
{{ Debugbar::info($errors) }}

{{ Debugbar::addMessage('CONTENIDO DE LA VARIABLE', '$crud') }}
{{ Debugbar::info($crud) }}

@if((Auth::user()->role === 'admin') || (Auth::user()->role === 'supervisor'))

	{{ Form::open(['action' => ['CRUDController@update', $crud->id], 'method' => 'PUT',]) }}

	<!--Acceder al valor de un campo (en este caso rol) de un usuario logueado desde una vista-->
	<!--https://laracasts.com/discuss/channels/general-discussion/can-i-access-current-user-data-in-blade?page=1-->
	<!--Forma correcta de determinar el if-->
	<!--https://laracasts.com/discuss/channels/laravel/good-practice-to-conditionally-show-views-from-routescontrollers?page=1-->

		<div class="form-row">
		  <div class="form-group col-md-6 @if ($errors->has('cedula')) has-error @endif">
		    {{csrf_field()}} {!! Form::label('CEDULA', 'Cedula:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('cedula', $crud->CEDULA, ['class' => 'form-control', 'autofocus', 'autofocus']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('cedula')}}</span>
		  </div>
		  <div class="form-group col-md-6 @if ($errors->has('sexo')) has-error @endif">
		    {!! Form::label('SEXO', 'Sexo:', array('class' => 'col-form-label')) !!}
		    {{ Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], $crud->SEXO, ['placeholder' => 'Indique el sexo...', 'class' => 'form-control']) }}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('sexo')}}</span>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-6 @if ($errors->has('nombres')) has-error @endif">
		    {!! Form::label('NOMBRES', 'Nombres:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('nombres', $crud->NOMBRES, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('nombres')}}</span>
		  </div>
		  <div class="form-group col-md-6  @if ($errors->has('apellidos')) has-error @endif">
		    {!! Form::label('APELLIDOS', 'Apellidos:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('apellidos', $crud->APELLIDOS, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('apellidos')}}</span>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-6 @if ($errors->has('universidad')) has-error @endif">
		    {!! Form::label('UNIVERSIDAD', 'Universidad:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('universidad', $crud->UNIVERSIDAD, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('universidad')}}</span>
		  </div>
		  <div class="form-group col-md-6 @if ($errors->has('carrera')) has-error @endif">
		    {!! Form::label('CARRERA', 'Carrera:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('carrera', $crud->CARRERA, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('carrera')}}</span>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-4 @if ($errors->has('estado')) has-error @endif">
		    {!! Form::label('ESTADO', 'Estado:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('estado', $crud->ESTADO, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('estado')}}</span>
		  </div>
		  <div class="form-group col-md-4 @if ($errors->has('municipio')) has-error @endif">
		    {!! Form::label('MUNICIPIO', 'Municipio:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('municipio', $crud->MUNICIPIO, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('municipio')}}</span>
		  </div>
		  <div class="form-group col-md-4 @if ($errors->has('parroquia')) has-error @endif">
		    {!! Form::label('PARROQUIA', 'Parroquia:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('parroquia', $crud->PARROQUIA, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('parroquia')}}</span>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-4 @if ($errors->has('centro')) has-error @endif">
		    {!! Form::label('CENTRO', 'Centro:') !!}
		    {!! Form::text('centro', $crud->CENTRO, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('centro')}}</span>
		  </div>
		  <div class="form-group col-md-4 @if ($errors->has('sector')) has-error @endif">
		    {!! Form::label('SECTOR', 'Sector:') !!}
		    {!! Form::text('sector', $crud->SECTOR, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('sector')}}</span>
		  </div>
		  <div class="form-group col-md-4 @if ($errors->has('subsector')) has-error @endif">
		    {!! Form::label('SUBSECTOR', 'Subsector:') !!}
		    {!! Form::text('subsector', $crud->SUBSECTOR, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('subsector')}}</span>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-6 @if ($errors->has('voto')) has-error @endif">
		    {!! Form::label('VOTO', 'Voto:', array('class' => 'col-form-label')) !!}
		    {{ Form::select('voto', ['S' => 'Si', 'N' => 'No'], $crud->VOTO, ['placeholder' => 'Indique si votó...', 'class' => 'form-control']) }}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('voto')}}</span>
		  </div>
		  <div class="form-group col-md-6 @if ($errors->has('telefono')) has-error @endif">
		    {!! Form::label('TELEFONO', 'Telefono:') !!}
		    {!! Form::text('telefono', $crud->TELEFONO, ['class' => 'form-control']) !!}
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

	{{ Form::close() }}

@elseif (Auth::user()->role === 'editor')

	{{ Form::open(['action' => ['CRUDController@update', $crud->id], 'method' => 'PUT',]) }}

		<div class="form-row">
		  <div class="form-group col-md-6 @if ($errors->has('cedula')) has-error @endif">
		    {{csrf_field()}} {!! Form::label('CEDULA', 'Cedula:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('cedula', $crud->CEDULA, ['class' => 'form-control', 'readonly' => 'readonly' ,'autofocus', 'autofocus']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('cedula')}}</span>
		  </div>
		  <div class="form-group col-md-6 @if ($errors->has('sexo')) has-error @endif">
		    {!! Form::label('SEXO', 'Sexo:', array('class' => 'col-form-label')) !!}
		    {{ Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], $crud->SEXO, ['placeholder' => 'Indique el sexo...', 'class' => 'form-control', 'disabled' => 'disabled']) }}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('sexo')}}</span>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-6 @if ($errors->has('nombres')) has-error @endif">
		    {!! Form::label('NOMBRES', 'Nombres:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('nombres', $crud->NOMBRES, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('nombres')}}</span>
		  </div>
		  <div class="form-group col-md-6  @if ($errors->has('apellidos')) has-error @endif">
		    {!! Form::label('APELLIDOS', 'Apellidos:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('apellidos', $crud->APELLIDOS, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('apellidos')}}</span>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-6 @if ($errors->has('universidad')) has-error @endif">
		    {!! Form::label('UNIVERSIDAD', 'Universidad:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('universidad', $crud->UNIVERSIDAD, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('universidad')}}</span>
		  </div>
		  <div class="form-group col-md-6 @if ($errors->has('carrera')) has-error @endif">
		    {!! Form::label('CARRERA', 'Carrera:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('carrera', $crud->CARRERA, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('carrera')}}</span>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-4 @if ($errors->has('estado')) has-error @endif">
		    {!! Form::label('ESTADO', 'Estado:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('estado', $crud->ESTADO, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('estado')}}</span>
		  </div>
		  <div class="form-group col-md-4 @if ($errors->has('municipio')) has-error @endif">
		    {!! Form::label('MUNICIPIO', 'Municipio:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('municipio', $crud->MUNICIPIO, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('municipio')}}</span>
		  </div>
		  <div class="form-group col-md-4 @if ($errors->has('parroquia')) has-error @endif">
		    {!! Form::label('PARROQUIA', 'Parroquia:', array('class' => 'col-form-label')) !!}
		    {!! Form::text('parroquia', $crud->PARROQUIA, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('parroquia')}}</span>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-4 @if ($errors->has('centro')) has-error @endif">
		    {!! Form::label('CENTRO', 'Centro:') !!}
		    {!! Form::text('centro', $crud->CENTRO, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('centro')}}</span>
		  </div>
		  <div class="form-group col-md-4 @if ($errors->has('sector')) has-error @endif">
		    {!! Form::label('SECTOR', 'Sector:') !!}
		    {!! Form::text('sector', $crud->SECTOR, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('sector')}}</span>
		  </div>
		  <div class="form-group col-md-4 @if ($errors->has('subsector')) has-error @endif">
		    {!! Form::label('SUBSECTOR', 'Subsector:') !!}
		    {!! Form::text('subsector', $crud->SUBSECTOR, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('subsector')}}</span>
		  </div>
		</div>

		<div class="form-row">
		  <div class="form-group col-md-6 @if ($errors->has('voto')) has-error @endif">
		    {!! Form::label('VOTO', 'Voto:', array('class' => 'col-form-label')) !!}
		    {{ Form::select('voto', ['S' => 'Si', 'N' => 'No'], $crud->VOTO, ['placeholder' => 'Indique si votó...', 'class' => 'form-control']) }}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('voto')}}</span>
		  </div>
		  <div class="form-group col-md-6 @if ($errors->has('telefono')) has-error @endif">
		    {!! Form::label('TELEFONO', 'Telefono:') !!} {!! Form::text('telefono', $crud->TELEFONO, ['class' => 'form-control']) !!}
		    <span style="color:#A94442" class="help-block">{{ $errors->first('telefono')}}</span>
		  </div>
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