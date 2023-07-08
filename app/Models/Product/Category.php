<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $table    = "categories";
    protected $fillable = [
        "name_ar",
        'name_en',
        'image',
        'category_id',
        'is_active'
    ];

    public function parentCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
