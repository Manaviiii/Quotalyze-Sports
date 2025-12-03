<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = 'visits';

    protected $fillable = [
        'ip',
        'pagina',
        'user_agent',
        'visitas',
        'primera_visita',
        'ultima_visita'
    ];

    public $timestamps = true;
}
