<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketOrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_order_id',
        'ticket_type_id',
        'quantity',
        'unit_price',
        'subtotal'
    ];

    protected $casts = [
        'unit_price' => 'decimal:2',
        'subtotal' => 'decimal:2'
    ];

    public function ticketOrder()
    {
        return $this->belongsTo(TicketOrder::class);
    }

    public function ticketType()
    {
        return $this->belongsTo(TicketType::class);
    }
}