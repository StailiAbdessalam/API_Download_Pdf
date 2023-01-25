<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mandats extends Model
{
    use HasFactory;

    protected $table = 'mandats';

    protected $primaryKey = 'mandat_id';

    protected $fillable = [
        'mandat_id',
        'mandat_numero',
        'mandat_type',
        'mandat_date_debut',
        'mandat_date_fin',
        'mandat_adresse',
        'mandat_adresse_proprietaire',
        'mandat_ville_proprietaire',
        'mandat_ville',
        'mandat_prix_vente',
        'mandat_honoraires',
        'mandat_description',
        'mandat_vendeur_id',
        'mandat_chercher_id',
        'mandat_compte_id',
        'mandat_bien_id',
        'mandat_date_creation',
    ];

    public function bien()
    {
        return $this->belongsTo(Biens::class, 'mandat_bien_id');
    }
}
