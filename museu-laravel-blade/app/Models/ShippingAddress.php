<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShippingAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'recipient_name',
        'phone',
        'zip_code',
        'street',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state',
        'default'
    ];

    protected $casts = [
        'default' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}