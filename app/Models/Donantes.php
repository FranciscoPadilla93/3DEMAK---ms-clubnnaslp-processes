<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donantes extends Model
{
    use SoftDeletes;

    protected $table = 'donantes';

    protected $fillable = [
        'id_club_fk',
        'nombre_completo',
        'correo_electronico_principal',
        'fecha_nacimiento',
        'is_active'
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
        'is_active' => 'boolean'
    ];
}
