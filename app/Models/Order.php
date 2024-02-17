<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['fecha-pedido'];

    public function articles() : HasMany
    {
        return $this->hasMany(Article::class)
        ->withPivot('cantidad')
        ->withTimestamps();   
    }  

    public function client() : BelongsTo
    {
        return $this->belongsTo(Client::class);    
    }

    public function address() : HasOne {
        return $this->hasOne(Address::class);
    }
}
