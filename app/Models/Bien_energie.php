<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien_energie extends Model
{
    use HasFactory;

    protected $table = 'bien_energie';

    protected $primaryKey = 'energie_id ';

    protected $fillable = [
        'energie_id',
        'energie_type_chauffage',
        'energie_mode_chauffage',
        'energie_valeur_energetique',
        'energie_eau_chaude',
        'energie_cheminee_poele',
        'energie_renseigner_charge_fact',
        'energie_charges_chauffage',
        'energie_charges_eau',
        'energie_charges_copropriete',
        'energie_cout_annuel',
        'energie_charges_electriques',
        'energie_taxe_fonciere',
        'energie_dpe_energie',
        'energie_dpe_valeur',
        'energie_valeur_gaz_serre',
        'energie_gaz_serre',
        'energie_installation_electrique',
        'energie_installation_gaz',
        'energie_amiante',
        'energie_merules',
        'energie_termites',
        'energie_ernt',
        'energie_bien_id',
    ];
}
