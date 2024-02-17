<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    use HasFactory;

    protected $fillable=['saldo','limite-credito','descuento'];
    
    public function orders() : HasMany
    {
        return $this->hasMany(Order::class)
        ->withTimestamps();   
    }

    public function address() : HasOne {
        return $this->hasOne(Address::class);
    }
}
