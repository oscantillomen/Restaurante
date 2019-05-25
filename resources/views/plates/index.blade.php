@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
<script src="{{ asset('js/restaurant.js') }}"></script>
<div class="container">
    <form method="post" action="/p" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Agregar Nuevo Plato</h1>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Nombre del Plato</label>

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
                    <label for="price" class="col-md-4 col-form-label">Valor del Plato</label>
                    <input id="price"
                        type="text"
                        name="price"
                        class="form-control @error('price') is-invalid @enderror"
                        value="{{ old('price') }}"

                        autocomplete="price" autofocus>

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary"><i class="fas fa-plus"></i> Agregar Plato </button>
                </div>
            </div>
        </div>
    </form>
    <div class="row d-flex justify-content-center pt-5">
        <h2>Lista de Platos</h2>
    </div>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>PLATO</th>
                    <th>PRECIO</th>
                    <th>EDITAR</th>
                </tr>
            </thead>
            <tbody>
            @forelse($plates as $plate)
                    <tr>
                        <td>{{ $plate->name }}</td>
                        <td>{{ $plate->price }}</td>
                        <td>
                            <a href="/p/{{ $plate->id }}/edit" class="btn btn-warning"><i class="far fa-edit"></i> Editar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No hay ningun plato registrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
