<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien_media extends Model
{
    use HasFactory;

    protected $table = 'bien_media';

    protected $primaryKey = 'media_id';

    protected $fillable = [
        'media_id',
        'media_type',
        'media_valeur',
        'media_order',
        'media_date_creation',
        'media_bien_id',
    ];


}
