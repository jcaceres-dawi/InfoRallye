<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RacingTeam extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }

    public function coDrivers()
    {
        return $this->hasMany(CoDriver::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
