<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table    = 'slider';
    protected $fillable = [
        'address_en',
        'address_ar',
        'description_en',
        'description_ar',
        'path',
        'type',
        'group_by',
    ];
}
