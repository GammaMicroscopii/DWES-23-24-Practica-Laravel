<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion'];

    public function factories() : HasMany
    {
        return $this->hasMany(Factory::class)
        ->withPivot('existencias')
        ->withTimestamps();   
    }

    public function orders() : HasMany
    {
        return $this->hasMany(Order::class)
        ->withPivot('cantidad')
        ->withTimestamps();   
    }
}
