<?php

namespace App\Http\Controllers;

Use \App\Plate;
Use \App\Ingredient;
use Illuminate\Http\Request;

class PlatesController extends Controller
{
    public function create()
    {
        $plates = Plate::all();
        return view('plates.index', compact('plates'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Plate::create($data);
        return redirect('/p/create');
    }

    public function edit(Plate $plate)
    {
        return view('plates.edit', compact('plate'));
    }

    public function update(Plate $plate)
    {
        $data = request()->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);
        $plate->update($data);
        return redirect('/p/create');
    }

    public function show(Plate $plate)
    {
        $ingredients = Ingredient::all();
        return view('plates.ingredients', [
            'plate'=> $plate,
            'ingredients' => $ingredients]);
    }
}
