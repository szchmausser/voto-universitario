@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Principal</div>
          <div class="panel-body">

            @if((Auth::user()->role === 'admin') || (Auth::user()->role === 'supervisor') || (Auth::user()->role === 'editor'))

              <a id="boton" href="{{action('CRUDController@create')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> Nuevo registro</a>

            @elseif(Auth::user()->role === '')

              <a id="boton" class="btn btn-primary" disabled="disabled"><i class="fa fa-plus-square" aria-hidden="true"></i> Nuevo registro</a>

            @endif

            @include('crud.includes.info')

            <div class="scrollable">

              <table id="users-table" class="table table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th>ACCIONES</th>
                    <th>VOTO</th>
                    <th>CEDULA</th>
                    <th>TELEFONO</th>
                    <th>APELLIDOS</th>
                    <th>NOMBRES</th>
                    <th>SEXO</th>
                    <th>UNIVERSIDAD</th>
                    <th>CARRERA</th>
                    <th>ESTADO</th>
                    <th>MUNICIPIO</th>
                    <th>PARROQUIA</th>
                    <th>CENTRO</th>
                    <th>SECTOR</th>
                    <th>SUBSECTOR</th>
                  </tr>
                </thead>
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
              </table>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CODIGO JQUERY DEL DATATABLE -->
  <!-- https://stackoverflow.com/a/33769435 -->
  @include('crud.includes.javascript.datatable')

@endsection