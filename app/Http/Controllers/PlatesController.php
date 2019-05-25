<?php

namespace App\Http\Controllers;

Use \App\Plate;
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
}
