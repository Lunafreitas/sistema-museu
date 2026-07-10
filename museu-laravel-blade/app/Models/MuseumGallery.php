<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MuseumGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'floor',
        'image'
    ];

    public function photos()
    {
        return $this->hasMany(MuseumPhoto::class, 'gallery_id');
    }
}