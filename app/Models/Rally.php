<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rally extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'website', 'start_date', 'end_date', 'category_id'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function stages()
    {
        return $this->hasMany(Stage::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_rally');
    }

    public function rankings()
    {
        return $this->hasMany(Ranking::class);
    }
}
