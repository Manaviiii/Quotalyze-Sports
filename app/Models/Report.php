<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'user_id',
        'usuario',
        'tipo',
        'mensaje',
        'match_id',
        'esta_arreglada',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fixture()
    {
        return $this->belongsTo(Fixture::class, 'match_id');
    }
}
