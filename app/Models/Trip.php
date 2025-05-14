<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trip extends Model
{
    protected $table = 'trips';
    protected $fillable = [
        'card_id',
        'ticket_types_id',
        'transport_id',
    ];

    /**
     * Get card associated with trip.
     */
    public function cards(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }

    /**
     * Get ticket type associated with trip.
     */
    public function ticket_types(): BelongsTo
    {
        return $this->belongsTo(TicketType::class, 'ticket_types_id');
    }

    /**
     * Get transport associated with trip.
     */
    public function transports(): BelongsTo
    {
        return $this->belongsTo(Transport::class, 'transport_id');
    }
}
