@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 text-center">
            <a href="/i/create" class="btn btn-success">Nuevo Ingrediente</a>
        </div>
        <div class="col-6 text-center">
            <a href="/p/create" class="btn btn-success">Nuevo Plato</a>
        </div>
    </div>
</div>
@endsection
