<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['driver_id', 'co_driver_id', 'racing_team_id'];

    public function rallies()
    {
        return $this->belongsToMany(Rally::class, 'team_rally');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function coDriver()
    {
        return $this->belongsTo(CoDriver::class);
    }

    public function racingTeam()
    {
        return $this->belongsTo(RacingTeam::class);
    }

    public function rankings()
    {
        return $this->hasMany(Ranking::class);
    }

    public function results()
    {
        return $this->hasMany(StageResult::class);
    }
}
