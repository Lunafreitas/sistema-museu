<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exhibition extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'start_date',
        'end_date',
        'banner',
        'status'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function artworks()
    {
        return $this->belongsToMany(
            Artwork::class,
            'artwork_exhibition'
        );
    }
}