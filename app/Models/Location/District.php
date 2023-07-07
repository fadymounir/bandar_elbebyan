<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class District extends Model
{
    protected $table    = "districts";
    protected $fillable = [
        'name_ar',
        'name_en',
        'city_id'
    ];

    public function city():BelongsTo
    {
        return $this->belongsTo(City::class,'city_id');
    }
}
