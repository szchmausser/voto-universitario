@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Editar registro</div>
        <div class="panel-body">
          @include('crud.includes.info') @include('crud.includes.edit-form')
        </div>
      </div>
    </div>
  </div>
</div>
@endsection