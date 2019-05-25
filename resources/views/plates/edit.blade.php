@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p/{{ $plate->id }}" enctype="multipart/form-data" method="post" >
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Editar Plato</h1>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Nombre del Plato</label>

                    <input id="name"
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') ?? $plate->name}}"

                        autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="price" class="col-md-4 col-form-label">Precio del Plato</label>
                    <input id="price"
                        type="text"
                        name="price"
                        class="form-control @error('price') is-invalid @enderror"
                        value="{{ old('price') ?? $plate->price }}"

                        autocomplete="price" autofocus>

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary"><i class="far fa-edit"></i> Guardar Plato</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
