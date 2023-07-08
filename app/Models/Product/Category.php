<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table    = "categories";
    protected $fillable = [
        "name_ar",
        'name_en',
        'image',
        'category_id',
        'is_active',
    ];

   public function sub_categories(){
      return $this->hasMany(Category::class,'category_id','id');
   }
}
