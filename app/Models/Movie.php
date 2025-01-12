<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'year', 'duration'];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
