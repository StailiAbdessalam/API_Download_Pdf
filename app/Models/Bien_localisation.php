<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien_localisation extends Model
{
    use HasFactory;

    protected $table = 'bien_localisation';

    protected $primaryKey = 'local_id ';

    protected $fillable = [
        'local_id ',
        'local_adresse',
        'latitude',
        'longitude',
        'local_adresse_private',
        'local_ville',
        'local_code_postal',
        'local_is_ascenseur',
        'local_vue',
        'local_mitoyennete',
        'local_copropriete',
        'local_nb_lots',
        'local_etage',
        'local_etage_total',
        'local_syndic',
        'local_bien_id',
    ];
}
