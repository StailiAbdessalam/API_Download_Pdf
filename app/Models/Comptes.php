<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Comptes extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'comptes';

    protected $primaryKey = 'compte_id';

    protected $fillable = [
        'compte_id',
        'compte_nom',
        'compte_prenom',
        'compte_tel',
        'compte_email',
        'compte_password',
        'compte_image',
        'agence_id',
        'equipe_id',
        'role_id',
        'compte_active',
        'date_creation'
    ];
}
