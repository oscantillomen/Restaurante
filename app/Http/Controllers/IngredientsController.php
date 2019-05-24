<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientsController extends Controller
{
    public function create()
    {
        $ingredients = Ingredient::all();
        return view('ingredients.create', [
            'ingredients' => $ingredients,
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'provider' => 'required',
        ]);

        \App\Ingredient::create($data);
        return redirect('/i/create');
    }

}
