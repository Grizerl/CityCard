<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    protected $table = 'cards';
    protected $fillable = [
        'user_id',
        'card_number',
        'balance',
    ];

    /**
     * Get the user associated with the card.
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get trips for the card.
     */
    public function trips(): HasMany
    {
        return $this->hasMany(Trip::class);
    }

    /**
     * Get transactions for the card.
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
