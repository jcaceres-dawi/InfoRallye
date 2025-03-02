<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $fillable = ['rally_id', 'team_id', 'position', 'total_time', 'points'];

    protected $casts = [
        'total_time' => 'datetime:H:i:s',
    ];

    public function rally()
    {
        return $this->belongsTo(Rally::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
