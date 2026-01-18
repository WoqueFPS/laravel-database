<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        // Eager loading van het zonnestelsel
        $planets = Planet::with('solarSystem')->get();
        return view('planets.index', compact('planets'));
    }

    public function show($id)
    {
        $planet = Planet::with('solarSystem')->findOrFail($id);
        return view('planets.show', compact('planet'));
    }
}
