<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Odd extends Model
{
    protected $fillable = [
        'match_id',
        'bookmaker_id',
        'market',
        'home',
        'draw',
        'away'
    ];

    // Una cuota pertenece a un partido
    public function fixture()
    {
        return $this->belongsTo(Fixture::class, 'match_id');
    }

    // Una cuota pertenece a una casa de apuestas
    public function bookmaker()
    {
        return $this->belongsTo(Bookmaker::class);
    }
}
