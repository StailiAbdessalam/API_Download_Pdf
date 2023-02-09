<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendeurs extends Model
{
    use HasFactory;

    protected $table = 'vendeurs';

    protected $primaryKey = 'vendeur_id';


    protected $fillable = [
        'vendeur_id',
        'vendeur_civilite',
        'vendeur_nom',
        'vendeur_prenom',
        'vendeur_email',
        'vendeur_tel',
        'vendeur_type_entreprise',
        'vendeur_raison_social',
        'vendeur_rcs',
        'vendeur_representer_par',
        'vendeur_fonction',
        'vendeur_societe_adresse',
        'vendeur_active',
        'vendeur_date_creation',
        'vendeur_compte_id',
    ];
}
