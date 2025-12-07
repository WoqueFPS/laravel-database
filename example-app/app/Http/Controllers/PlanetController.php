<?php

namespace App\Http\Controllers;

use App\Models\Planet;   
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        // SELECT * FROM planets
        $planets = Planet::all();   

        return view('planets.index', [
            'planets' => $planets
        ]);
    }

    public function show($id)
    {
        // SELECT * FROM planets WHERE id = ?
        $planet = Planet::findOrFail($id);   

        return view('planets.show', [
            'planet' => $planet
        ]);
    }
}
