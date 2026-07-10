<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'category_id',
        'title',
        'desc',
        'ano_criacao',
        'tecnica',
        'dimensoes',
        'localizacao',
        'preview_image',
        'status'
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ArtworkImage::class);
    }

    public function exhibitions()
    {
        return $this->belongsToMany(
            Exhibition::class,
            'artwork_exhibition'
        );
    }
}