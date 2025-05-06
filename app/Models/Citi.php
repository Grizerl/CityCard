<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citi extends Model
{
    protected $table = 'citis';
    protected $fillable = [
        'name'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
    public function transports()
    {
        return $this->hasMany(Transport::class);
    }
}
