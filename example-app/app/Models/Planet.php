<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    // Als je tabel planets heet, hoef je dit niet aan te passen.
    protected $table = 'planets';

    // Zorg dat deze velden mass-assigned mogen worden (niet verplicht voor je opdracht, maar netjes)
    protected $fillable = [
        'name',
        'description',
        'size_in_km'
    ];
}
