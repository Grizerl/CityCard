<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';
    protected $fillable = [
        'user_id',
        'card_number',
        'balance',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
