<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class ProductListDetail extends Model
{
    protected $table = 'product_list_details';

    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'product_id'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
