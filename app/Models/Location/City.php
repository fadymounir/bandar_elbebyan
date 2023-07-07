<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $table    = "cities";
    protected $fillable = [
        'name_ar',
        'name_en',
        'area_id'
    ];

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

}
