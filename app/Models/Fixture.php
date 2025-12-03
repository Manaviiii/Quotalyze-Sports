<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    protected $table = 'matches';

    // Columnas rellenables automáticamente
    protected $fillable = [
        'api_match_id',
        'league',
        'home_team',
        'away_team',
        'match_date',
        'status'
    ];

    // Un partido tiene muchas cuotas
    public function odds()
    {
        return $this->hasMany(Odd::class, 'match_id');
    }

    // Un partido tiene muchos H2H
    public function h2h()
    {
        return $this->hasMany(H2H::class, 'match_id');
    }
}
