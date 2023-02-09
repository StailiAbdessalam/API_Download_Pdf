<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectors_infos extends Model
{
    use HasFactory;


    protected $table = 'sectors_infos';

    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'code_commune',
        'population',
        'nombre_habitant',
        'age_moyen',
        'salaire_moyen',
        'taux_chomage',
        'surface',
        'proprietaire_pourcent',
        'locataire_pourcent',
        'logement_sociaux_pourcent',
        'appartement_pourcent',
        'maison_pourcent',
        'created_at',
        'updated_at',
    ];
}
