<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'pic',
        'title',
        'link',
        'sku',
        'count',
        'material',
        'weight',
        'price',
        'discount_price',
        'description',
        'detail',
        'status',
        'instructor',
    ];
}

