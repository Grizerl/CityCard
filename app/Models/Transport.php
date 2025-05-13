<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transport extends Model
{
    protected $table = 'transports';
    protected $fillable = [
        'transport_type',
        'transport_number',
        'city_id'
    ];

    /**
     * Get trips associated with transport.
     */
    public function trips(): HasMany
    {
        return $this->hasMany(Trip::class);
    }

    /**
    * Get city associated with transport.
    */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Get ticket types associated with transport.
     */
    public function ticket_types(): HasMany
    {
        return $this->hasMany(Ticket_Type::class);
    }
}
