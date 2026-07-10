<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'visit_date',
        'total',
        'status'
    ];

    protected $casts = [
        'visit_date' => 'date',
        'total' => 'decimal:2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(TicketOrderItem::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}