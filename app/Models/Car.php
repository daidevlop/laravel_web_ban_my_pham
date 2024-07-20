<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // use HasFactory;
    // protected $timestamps = true;
    protected $fillable = [
        'id_user',
        'id_product',
        'discount',
        'quantity',
    ];
    
}
