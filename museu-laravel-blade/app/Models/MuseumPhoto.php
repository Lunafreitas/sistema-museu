<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MuseumPhoto extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'gallery_id',
        'photo',
        'caption'
    ];

    public function gallery()
    {
        return $this->belongsTo(MuseumGallery::class, 'gallery_id');
    }
}