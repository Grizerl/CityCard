<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = [
        'name'
    ];

    /**
     * Get transports for the city.
     */
    public function transports(): HasMany
    {
        return $this->hasMany(Transport::class);
    }
}
