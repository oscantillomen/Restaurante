@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<div class="container">
    <form method="post" action="/i" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Agregar Nuevo Ingrediente</h1>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Nombre del Ingrediente</label>

                    <input id="name"
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"

                        autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="provider" class="col-md-4 col-form-label">Nombre del Proveedor</label>
                    <input id="provider"
                        type="text"
                        name="provider"
                        class="form-control @error('provider') is-invalid @enderror"
                        value="{{ old('provider') }}"

                        autocomplete="provider" autofocus>

                    @error('provider')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Agregar Ingrediente </button>
                </div>
            </div>
        </div>
    </form>
    <div class="row d-flex justify-content-center pt-5">
        <h2>Lista de Ingredientes</h2>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>INGREDIENTES</th>
                        <th>PROVEEDOR</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ingredients as $ingredient)
                        <tr>
                            <td>{{ $ingredient->name }}</td>
                            <td>{{ $ingredient->provider }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center">No hay ningun ingrediente registrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
@endsection
