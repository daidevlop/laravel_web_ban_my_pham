<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img',
        'price',
        'stock',
        'description',
        'warranty_policy',
        'discount',
        'category_id',
    ];

}
