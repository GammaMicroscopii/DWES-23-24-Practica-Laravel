<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['numero','calle','ciudad','comuna'];
    
    public function client() : BelongsTo
    {
        return $this->belongsTo(Client::class);    
    }
    
    public function order() : BelongsTo
    {
        return $this->belongsTo(Order::class);    
    }
}
