<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    public function index()
    {
        // SELECT * FROM planets
        $planets = DB::table('planets')->get();

        return view('planets.index', [
            'planets' => $planets
        ]);
    }

    public function show($id)
    {
        // SELECT * FROM planets WHERE id = ?
        $planet = DB::table('planets')->where('id', $id)->first();

        return view('planets.show', [
            'planet' => $planet
        ]);
    }
}
