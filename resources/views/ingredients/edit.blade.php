@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/i/{{ $ingredient->id }}" enctype="multipart/form-data" method="post" >
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Editar Ingrediente</h1>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Nombre del Ingrediente</label>

                    <input id="name"
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') ?? $ingredient->name}}"

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
                        value="{{ old('provider') ?? $ingredient->provider }}"

                        autocomplete="provider" autofocus>

                    @error('provider')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary"><i class="far fa-edit"></i> Guardar Ingrediente </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
