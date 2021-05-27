@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row text-center pb-4">
        <div class="col-md-12">
            <span class="label label-default">Elige la opción que desees en los botones de abajo para crear, actualizar, leer y eliminar los items asociados.</span>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-2">
            <a href="{{route('admin.clientes.index')}}" class="btn btn-migrate">Clientes</a>
        </div>
        <div class="col-2">
            <a href="{{route('admin.cities.index')}}" class="btn btn-migrate">Cities</a>
        </div>
        <div class="col-2">
            <a href="{{route('admin.users.index')}}" class="btn btn-migrate">Usuarios app</a>
        </div>
    </div>
</div>
@endsection
