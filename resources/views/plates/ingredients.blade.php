@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
<script src="{{ asset('js/restaurant.js') }}"></script>
<div class="container">
    <div class="row d-flex justify-content-center pt-5">
        <h1>{{ strtoupper($plate->name) }}</h1>
    </div>
    <div class="row pt-3">
        <div class="col-6 offset-3">
            <form action="">
                <select name="ingredient" id="ingredient" class="form-control">
                    <option value="">Seleccione un Ingrediente</option>
                    @foreach($ingredients as $ingredient)
                        <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
    <div class="row d-flex justify-content-center pt-5">
        <h2>Ingredientes del Plato</h2>
    </div>
    <div class="row pt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>INGREDIENTE</th>
                    <th>EDITAR</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ingredients as $ingredient)
                    <tr>
                        <td>{{ $ingredient->name }}</td>
                        <td>
                            <a href="/p/{{ $ingredient->id }}/edit" class="btn btn-warning"><i class="fas fa-hamburger"></i> Ingredientes</a>
                        </td>
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
@endsection
