<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket_Type extends Model
{
    protected $table = 'tiket__types';
    protected $fillable = [
        'name',
        'price',
        'transport_id',
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
