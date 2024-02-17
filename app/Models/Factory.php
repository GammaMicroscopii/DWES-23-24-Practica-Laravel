<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Factory extends Model
{
    use HasFactory;

    protected $fillable= ['telefono_contacto','articulos_provistos'];

    public function articles() : BelongsToMany
    {
        return $this->belongsToMany(Article::class)
        ->withPivot('existencias')
        ->withTimestamps();   
    }
}
