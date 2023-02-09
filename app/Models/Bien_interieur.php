<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien_interieur extends Model
{
    use HasFactory;

    protected $table = 'bien_interieur';

    protected $primaryKey = 'inter_id';

    protected $fillable =[
        'inter_id',
        'inter_niveaux',
        'inter_pieces',
        'inter_chambres',
        'inter_chambre_rdc',
        'inter_chambre_parentale',
        'inter_salle_bain',
        'inter_salle_eau',
        'inter_wc',
        'inter_wc_rdc',
        'inter_type_cuisine',
        'inter_sous_sol',
        'inter_buanderie',
        'inter_cave',
        'inter_nb_caves',
        'inter_bien_id',
    ];
}
