<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket_Type extends Model
{
    protected $table = 'tiket__types';
    protected $fillable = [
        'price',
        'transport_category',
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
