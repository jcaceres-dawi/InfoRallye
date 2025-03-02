<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable = [
        'rally_id',
        'name',
        'start_point_lat',
        'start_point_lng',
        'end_point_lat',
        'end_point_lng',
        'length_km',
        'surface',
        'route'
    ];

    protected $casts = [
        'route' => 'array',
    ];

    public function rally()
    {
        return $this->belongsTo(Rally::class);
    }

    public function results()
    {
        return $this->hasMany(StageResult::class);
    }
}
