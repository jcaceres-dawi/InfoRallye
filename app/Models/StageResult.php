<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StageResult extends Model
{
    use HasFactory;

    protected $fillable = ['stage_id', 'team_id', 'time'];

    protected $casts = [
        'time' => 'datetime:H:i:s',
    ];

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
