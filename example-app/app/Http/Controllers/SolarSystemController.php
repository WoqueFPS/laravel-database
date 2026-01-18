<?php

namespace App\Http\Controllers;

use App\Models\SolarSystem;

class SolarSystemController extends Controller
{
    public function index()
    {
        // Met aantal planeten
        $solarsystems = SolarSystem::withCount('planets')->get();
        return view('solarsystems.index', compact('solarsystems'));
    }

    public function show($id)
    {
        // Haal zonnestelsel en bijhorende planeten op
        $solarsystem = SolarSystem::with('planets')->findOrFail($id);
        return view('solarsystems.show', compact('solarsystem'));
    }
}
