<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'nasc_date',
        'morte_date',
        'biography',
        'photo'
    ];

    protected $casts = [
        'nasc_date' => 'date',
        'morte_date' => 'date'
    ];

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
}