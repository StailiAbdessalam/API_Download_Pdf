<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biens extends Model
{
    use HasFactory;

    protected $table = 'biens';

    protected $primaryKey = 'bien_id';

    protected $fillable = [
        'bien_id',
        'bien_titre',
        'bien_description',
        'bien_offre',
        'bien_type',
        'bien_pieces',
        'bien_chambres',
        'bien_surface',
        'bien_terrain',
        'bien_prix_fai',
        'bien_honoraires',
        'bien_charge_de',
        'bien_prix_net_vendeur',
        'bien_frai_notaire',
        'bien_prix_tfc',
        'bien_exception',
        'bien_statut',
        'bien_date_creation',
        'bien_compte_id',
        'bien_reference_id',
    ];

    public function bien()
    {
        return $this->belongsTo('App\Models\Biens');
    }

    public function bien_reference()
    {
        return $this->belongsTo('App\Models\Biens');
    }

    public function bien_compte()
    {
        return $this->belongsTo('App\Models\Biens');
    }
}
