<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmaker extends Model
{
    // Indica qué columnas se pueden asignar masivamente
    protected $fillable = ['name', 'slug', 'domain', 'logo_url'];

    // Un bookmaker tiene muchas odds
    public function odds()
    {
        return $this->hasMany(Odd::class);
    }
}
