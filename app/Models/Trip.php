<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';
    protected $fillable = [
        'card_id',
        'tikets_types_id',
        'transport_id'
    ];
}
