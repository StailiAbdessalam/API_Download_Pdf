<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte_roles extends Model
{
    use HasFactory;

    protected $table = 'compte_roles';

    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_id',
        'role_titre',
        'role_active',
        ];

}
