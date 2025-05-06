<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $table = 'transports';
    protected $fillable = [
        'transport_type',
        'transport_number',
        'city_id'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function city()
    {
        return $this->belongsTo(Citi::class);
    }
}
