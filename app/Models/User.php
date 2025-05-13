<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'phone',
        'password',
        'role',
    ];

    /**
    * Get cards associated with user.
    */
    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }

}
