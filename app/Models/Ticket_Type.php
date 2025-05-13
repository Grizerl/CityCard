<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket_Type extends Model
{
    protected $table = 'ticket__types';
    protected $fillable = [
        'name',
        'price',
        'transport_id',
    ];

    /**
     * Get the associated with ticket type.
     */
    public function trips(): HasMany
    {
        return $this->hasMany(Trip::class);
    }

    /**
     * Get transport associated with ticket type.
     */
    public function transport(): BelongsTo
    {
        return $this->belongsTo(Transport::class);
    }
}
