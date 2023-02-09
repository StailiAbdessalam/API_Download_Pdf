<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien_surface extends Model
{
    use HasFactory;

    protected $table = 'bien_surface';

    protected $primaryKey = 'surface_id';

    protected $fillable = [
        'surface_id',
        'surface_habitable',
        'surface_utile',
        'surface_sous_sol',
        'surface_combles',
        'surface_carrez',
        'surface_terrain',
        'surface_jardin',
        'surface_terrasse',
        'surface_is_terrasse',
        'surface_nb_terrasse',
        'surface_is_balcon',
        'surface_nb_balcon',
        'surface_balcon',
        'surface_ponderee',
        'surface_annexes',
        'surface_constructible',
        'surface_ces',
        'surface_shon',
        'surface_bien_id',
    ];
}
