<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class ProductColorImage extends Model
{
    protected $table    = 'product_colors_images';
    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
