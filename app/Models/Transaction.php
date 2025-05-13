<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = [
        'sum',
        'transactions_type',
        'card_id'
    ];

    /**
     * Get card associated with transaction.
     */
    public function cards(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }
}
