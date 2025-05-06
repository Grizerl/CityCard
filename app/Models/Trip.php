<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';
    protected $fillable = [
        'card_id',
        'tikets_types_id',
        'transport_id',
        'city_id',
    ];

    public function cards()
    {
        return $this->belongsTo(Card::class);
    }

    public function tiket_types()
    {
        return $this->belongsTo(Tiket_Type::class, 'tikets_types_id');
    }

    public function transports()
    {
        return $this->belongsTo(Transport::class, 'transport_id');
    }

    public function city()
    {
        return $this->belongsTo(Citi::class, 'city_id');
    }
}
