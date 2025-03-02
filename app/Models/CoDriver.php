<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoDriver extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'racing_team_id'];

    public function racingTeam()
    {
        return $this->belongsTo(RacingTeam::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
