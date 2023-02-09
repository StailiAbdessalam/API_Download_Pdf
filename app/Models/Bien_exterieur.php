<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien_exterieur extends Model
{
    use HasFactory;

    protected $table = 'bien_exterieur';

    protected $primaryKey = 'exter_id';

    protected $fillable = [
        'exter_id',
        'exter_annee_construction',
        'exter_type_construction',
        'exter_style',
        'exter_fenetres',
        'exter_volets',
        'exter_toiture',
        'exter_egout',
        'exter_etat_general',
        'exter_garage',
        'exter_is_parking',
        'exter_parking',
        'exter_parking_type',
        'exter_clotures',
        'exter_terrasse',
        'exter_piscine',
        'exter_particularite',
        'exter_bien_id',

    ];


}
