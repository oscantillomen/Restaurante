<?php

namespace App\Http\Controllers;

Use \App\Plate;
use Illuminate\Http\Request;

class PlatesController extends Controller
{
    public function create()
    {
        return view('plates.index');
    }

    public function store()
    {
        dd('hola');
    }
}
