<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'meta_title',
        'meta_description',
        'gold_weight',
        'diamond_weight',
        'default_image',
        'price',
        'is_discount',
        'discount_value',
        'discount_type',
        'is_available',
        'is_active'
    ];
}
