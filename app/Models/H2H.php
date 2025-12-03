<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class H2H extends Model
{
    protected $table = 'h2h';

    protected $fillable = [
        'match_id',
        'team_a',
        'team_b',
        'score_a',
        'score_b',
        'date',
        'competition',
    ];

    public function fixture()
    {
        return $this->belongsTo(Fixture::class, 'match_id');
    }
}
