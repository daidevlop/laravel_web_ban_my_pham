<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $timestamps = false;
    protected $fillable = [
        'id_user',
        'id_product',
        'price',
        'quantity',
    ];
    
}
