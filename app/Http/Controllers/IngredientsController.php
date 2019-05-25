<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientsController extends Controller
{
    public function create()
    {
        $ingredients = Ingredient::all();
        return view('ingredients.index', compact('ingredients'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'provider' => 'required',
        ]);

        Ingredient::create($data);
        return redirect('/i/create');
    }

    public function edit(Ingredient $ingredient)
    {
        return view('ingredients.edit', compact('ingredient'));
    }

    public function update(Ingredient $ingredient)
    {
        $data = request()->validate([
            'name' => 'required',
            'provider' => 'required',
        ]);
        $ingredient->update($data);
        return redirect('/i/create');
    }
}
